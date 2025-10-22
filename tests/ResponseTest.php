<?php

use PHPUnit\Framework\TestCase;
use ARP\Http\Response;

class ResponseTest extends TestCase
{
    public function testCanInitializeResponse()
    {
        $body = ['success' => true];
        $status = 201;
        $headers = ['Content-Type' => 'application/json'];

        $response = new Response($body, $status, $headers);

        $this->assertSame($body, $response->getBody());
        $this->assertSame($status, $response->getStatus());
        $this->assertSame($headers, $response->getHeaders());
    }

    public function testCanMergeHeaders()
    {
        $response = new Response('OK', 200, ['Content-Type' => 'text/plain']);
        $merged = $response->serHeaders(['X-Test' => 'Yes']);

        $this->assertArrayHasKey('X-Test', $merged);
        $this->assertSame('Yes', $merged['X-Test']);
        $this->assertArrayHasKey('Content-Type', $merged);
    }

    public function testSendOutputsJsonWhenBodyIsArray()
    {
        $response = new Response(['message' => 'Hello'], 200, ['Content-Type' => 'application/json']);

        // Capture output
        ob_start();
        $response->send();
        $output = ob_get_clean();

        $this->assertJson($output);
        $this->assertStringContainsString('Hello', $output);
    }

    public function testSendOutputsStringWhenBodyIsString()
    {
        $response = new Response('Plain text response', 200, ['Content-Type' => 'text/plain']);

        ob_start();
        $response->send();
        $output = ob_get_clean();

        $this->assertIsString($output);
        $this->assertStringContainsString('Plain text response', $output);
    }

    public function testDefaultStatusAndHeaders()
    {
        $response = new Response('OK');

        $this->assertSame(200, $response->getStatus());
        $this->assertSame([], $response->getHeaders());
    }
}
