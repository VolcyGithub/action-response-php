<?php

use PHPUnit\Framework\TestCase;
use ARP\Http\JsonResponder;
use ARP\Http\Response;
use ARP\Factory\MessageFactory;
use ARP\Message\Message;

class JsonResponderTest extends TestCase
{
    /**
     * Backup of the original MessageFactory singleton instance.
     *
     * @var MessageFactory|null
     */
    protected $originalInstance = null;

    protected function setUp(): void
    {
        // Backup the original MessageFactory singleton if needed
        if (method_exists(MessageFactory::class, 'getInstance')) {
            $this->originalInstance = MessageFactory::getInstance();
        }
    }

    protected function tearDown(): void
    {
        // Restore original instance if we replaced it
        if (isset($this->originalInstance)) {
            $ref = new ReflectionClass(MessageFactory::class);
            $instanceProp = $ref->getProperty('instance');
            $instanceProp->setAccessible(true);
            $instanceProp->setValue(null, $this->originalInstance);
        }
    }

    protected function mockMessageFactory($messageMock): void
    {
        // Mock MessageFactory singleton
        $mockFactory = $this->createMock(MessageFactory::class);
        $mockFactory->method('createMessage')->willReturn($messageMock);

        // Replace singleton instance via reflection
        $ref = new ReflectionClass(MessageFactory::class);
        $instanceProp = $ref->getProperty('instance');
        $instanceProp->setAccessible(true);
        $instanceProp->setValue(null, $mockFactory);
    }

    public function testRespondReturnsJsonResponseWhenMessageExists(): void
    {
        // Mock Message
        $mockMessage = $this->createMock(Message::class);
        $mockMessage->method('toArray')->willReturn([
            'code' => 1001,
            'http_status' => 200,
            'message' => ['en' => 'Success'],
            'type' => 'success'
        ]);
        $mockMessage->method('getHttpStatus')->willReturn(200);

        // Inject mock factory
        $this->mockMessageFactory($mockMessage);

        // Call JsonResponder
        $response = JsonResponder::respond('auth.login.success');

        // Assertions
        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(200, $response->getStatus());

        $body = $response->getBody();
        $this->assertArrayHasKey('code', $body);
        $this->assertEquals('success', $body['type']);

        $headers = $response->getHeaders();
        $this->assertEquals('application/json', $headers['Content-Type']);
    }

    public function testRespondReturns404WhenMessageNotFound(): void
    {
        $this->mockMessageFactory(null);

        $response = JsonResponder::respond('invalid.index');

        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(404, $response->getStatus());

        $body = $response->getBody();
        $this->assertEquals(['error' => 'Message not found'], $body);

        $headers = $response->getHeaders();
        $this->assertEquals('application/json', $headers['Content-Type']);
    }
}
