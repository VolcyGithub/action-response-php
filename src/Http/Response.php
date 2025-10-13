<?php
namespace ARP\Http;

class Response
{
    protected int $status;
    protected array|string $body;
    protected array $headers;

    public function __construct(array|string $body, int $status = 200, array $headers = [])
    {
        $this->body = $body;
        $this->status = $status;
        $this->headers = $headers;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getBody(): array|string
    {
        return $this->body;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }
    public function serHeaders(array $headers):array{
        return $this->headers = [...$this->headers,...$headers];
    }
    public function send(): void
    {
        http_response_code($this->status);
        foreach ($this->headers as $key => $value) {
            header("$key: $value");
        }

        if (is_array($this->body)) {
            echo json_encode($this->body, JSON_PRETTY_PRINT);
        } else {
            echo $this->body;
        }
    }
}
