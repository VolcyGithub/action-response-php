<?php

use PHPUnit\Framework\TestCase;
use ARP\Message\Message;

class MessageTest extends TestCase
{
    private array $sampleData;

    protected function setUp(): void
    {
        $this->sampleData = [
            'code' => 1001,
            'http_status' => 200,
            'message' => [
                'en' => 'Login successful',
                'fr' => 'Connexion réussie'
            ],
            'type' => 'success',
        ];
    }

    public function testCanInstantiateMessage(): void
    {
        $msg = new Message($this->sampleData);

        $this->assertInstanceOf(Message::class, $msg);
        $this->assertEquals(1001, $msg->getCode());
        $this->assertEquals(200, $msg->getHttpStatus());
        $this->assertEquals('success', $msg->getType());
    }

    public function testGetMessagesReturnsArray(): void
    {
        $msg = new Message($this->sampleData);

        $this->assertIsArray($msg->getMessages());
        $this->assertArrayHasKey('en', $msg->getMessages());
        $this->assertEquals('Login successful', $msg->getMessages()['en']);
    }

    public function testGetTextWithExistingLanguage(): void
    {
        $msg = new Message($this->sampleData);

        $this->assertEquals('Connexion réussie', $msg->getText('fr'));
        $this->assertEquals('Login successful', $msg->getText('en'));
    }

    public function testGetTextWithMissingLanguageFallsBackToEnglish(): void
    {
        $msg = new Message($this->sampleData);

        $this->assertEquals('Login successful', $msg->getText('es'));
    }

    public function testGetTextWhenEnglishIsAlsoMissing(): void
    {
        $data = [
            'code' => 5000,
            'http_status' => 400,
            'message' => ['fr' => 'Erreur inattendue'],
            'type' => 'error',
        ];

        $msg = new Message($data);
        $this->assertEquals('Message not available', $msg->getText('de'));
    }

    public function testToArrayMatchesOriginalData(): void
    {
        $msg = new Message($this->sampleData);
        $array = $msg->toArray();

        $this->assertEquals($this->sampleData['code'], $array['code']);
        $this->assertEquals($this->sampleData['http_status'], $array['http_status']);
        $this->assertEquals($this->sampleData['message'], $array['message']);
        $this->assertEquals($this->sampleData['type'], $array['type']);
    }

    public function testUnserializeAssignsPropertiesCorrectly(): void
    {
        $msg = new Message([]);
        $msg->__unserialize($this->sampleData);

        $this->assertEquals(1001, $msg->getCode());
        $this->assertEquals(200, $msg->getHttpStatus());
        $this->assertEquals('success', $msg->getType());
        $this->assertEquals('Login successful', $msg->getMessages()['en']);
    }

    public function testUnserializeIgnoresUnknownProperties(): void
    {
        $dataWithExtra = $this->sampleData + ['unknown' => 'should be ignored'];
        $msg = new Message($dataWithExtra);

        $this->assertObjectNotHasProperty('unknown', $msg);
        $this->assertEquals(1001, $msg->getCode());
    }

    public function testDefaultValuesWhenNoDataProvided(): void
    {
        $msg = new Message([]);

        // Since no default initialization, properties will be uninitialized.
        // So we check that unserialize doesn’t crash and toArray returns valid structure.
        $arr = $msg->toArray();

        $this->assertArrayHasKey('code', $arr);
        $this->assertArrayHasKey('http_status', $arr);
        $this->assertArrayHasKey('message', $arr);
        $this->assertArrayHasKey('type', $arr);
    }
}
