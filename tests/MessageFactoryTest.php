<?php

use PHPUnit\Framework\TestCase;
use ARP\Factory\MessageFactory;
use ARP\Message\Message;
use ARP\Support\Arr;

class MessageFactoryTest extends TestCase
{
    protected string $configPath;

    protected function setUp(): void
    {
        // Create a fake config file for testing
        $this->configPath = __DIR__ . '/../fake_messages.php';
        file_put_contents($this->configPath, '<?php return [
            "auth" => [
                "login" => [
                    "success" => [
                        "code" => 1001,
                        "http_status" => 200,
                        "message" => ["en" => "Login successful", "fr" => "Connexion réussie"],
                        "type" => "success"
                    ]
                ]
            ]
        ];');
        
        // Override include path for MessageFactory
        $factoryReflection = new ReflectionClass(MessageFactory::class);
        $property = $factoryReflection->getProperty('instance');
        $property->setAccessible(true);
        $property->setValue(null); // reset singleton
    }

    protected function tearDown(): void
    {
        if (file_exists($this->configPath)) {
            unlink($this->configPath);
        }
    }

    public function testGetInstanceReturnsSingleton()
    {
        $instance1 = MessageFactory::getInstance();
        $instance2 = MessageFactory::getInstance();

        $this->assertInstanceOf(MessageFactory::class, $instance1);
        $this->assertSame($instance1, $instance2, 'Expected getInstance() to return same singleton');
    }

    public function testCreateMessageReturnsMessageInstance()
    {
        // Mock Arr::get() to read from our test file
        $messages = include $this->configPath;
        $key = 'auth.login.success';
        $expected = $messages['auth']['login']['success'];

        // We simulate Arr::get() since it's external
        $this->assertArrayHasKey('message', $expected);

        $factory = new MessageFactoryForTest($messages);
        $message = $factory->createMessage($key);

        $this->assertInstanceOf(Message::class, $message);
        $this->assertEquals($expected['code'], $message->getCode());
        $this->assertEquals($expected['http_status'], $message->getHttpStatus());
    }
}

/**
 * Helper subclass to inject custom config for testing
 */
class MessageFactoryForTest extends MessageFactory
{
    public function __construct(array $messages)
    {
        $this->messages = $messages;
    }
}
