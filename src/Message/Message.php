<?php

namespace ARP\Message;

use ARP\Contracts\MessageInterface;

class Message implements MessageInterface
{
    protected int $code;
    protected int $http_status;
    protected array $message;
    protected string $type;

    public function __construct(array $data)
    {
       $this->__unserialize($data);
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getHttpStatus(): int
    {
        return $this->http_status;
    }

    public function getMessages(): array
    {
        return $this->message;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getText(string $lang): string
    {
        return $this->messages[$lang] ?? $this->messages['en'] ?? 'Message not available';
    }

    public function toArray(): array
    {
        return [
            'code' => $this->code,
            'http_status' => $this->http_status,
            'message' => $this->message,
            'type' => $this->type
        ];
    }

    public function __unserialize(array $data): void
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }
}
