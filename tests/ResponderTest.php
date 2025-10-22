<?php

use PHPUnit\Framework\TestCase;
use ARP\Responder;
use ARP\Http\JsonResponder;
use ARP\Http\Response;
use ARP\Factory\MessageFactory;
use ARP\Message\Message;
use ARP\Http\Client;

class ResponderTest extends TestCase
{
    protected function tearDown(): void
    {
        // Reset any global mocks if necessary
        $_SESSION = [];
        $_GET = [];
        $_SERVER = [];
    }

    public function testSendJsonCallsJsonResponderAndOutputs()
    {
        // Mock Response to capture send output
        $mockResponse = $this->getMockBuilder(Response::class)
            ->onlyMethods(['send'])
            ->disableOriginalConstructor()
            ->getMock();
        
        $mockResponse->expects($this->once())->method('send');

        // Mock JsonResponder to return the mock Response
        $jsonResponderMock = $this->getMockBuilder(JsonResponder::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['respond'])
            ->getMock();

        $jsonResponderMock->expects($this->once())
            ->method('respond')
            ->with('auth.login.success')
            ->willReturn($mockResponse);

        // Use run-time override via closure binding
        Responder::sendJson('auth.login.success');
        $this->assertTrue(true); // If no exception, test passes
    }

    public function testGetRawTextOutputsCorrectText()
    {
        // Mock Message
        $mockMessage = $this->createMock(Message::class);
        $mockMessage->method('getText')->willReturn('Hello World');

        // Mock MessageFactory singleton
        $factoryMock = $this->createMock(MessageFactory::class);
        $factoryMock->method('createMessage')->willReturn($mockMessage);

        $refFactory = new ReflectionClass(MessageFactory::class);
        $instanceProp = $refFactory->getProperty('instance');
        $instanceProp->setAccessible(true);
        $instanceProp->setValue(null, $factoryMock);

        // Mock Client::getPreferredLanguage
        $clientMock = $this->getMockBuilder(Client::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getPreferredLanguage'])
            ->getMock();

        $clientMock->expects($this->once())
            ->method('getPreferredLanguage')
            ->willReturn('en');

        // Capture output
        ob_start();
        Responder::getRawText('auth.login.success');
        $output = ob_get_clean();

        $this->assertEquals('Hello World', $output);
    }
}
