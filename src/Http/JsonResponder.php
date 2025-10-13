<?php
namespace ARP\Http;

use ARP\Factory\MessageFactory;

class JsonResponder
{
    public static function respond(string $index): Response
    {
        $message = MessageFactory::getInstance()->createMessage($index);
        if (!$message) {
            return new Response(['error' => 'Message not found'], 404, [
                'Content-Type' => 'application/json'
            ]);
        }

        return new Response(
            $message->toArray(),
            $message->getHttpStatus(),
            ['Content-Type' => 'application/json']
        );
    }
}
