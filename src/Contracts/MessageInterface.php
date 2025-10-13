<?php
namespace ARP\Contracts;

interface MessageInterface
{
    /**
     * Get the unique numeric code for this message.
     *
     * @return int
     */
    public function getCode(): int;

    /**
     * Get the HTTP status code associated with this message.
     *
     * @return int
     */
    public function getHttpStatus(): int;

    /**
     * Get the localized messages.
     *
     * Example:
     * [
     *   'en' => 'Login successful',
     *   'fr' => 'Connexion réussie'
     * ]
     *
     * @return array<string,string>
     */
    public function getMessages(): array;

    /**
     * Get the message type.
     *
     * Common types: success, error, warning, info.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Get the message text for a specific language.
     * If language not found, fallback to English.
     *
     * @param string $lang
     * @return string
     */
    public function getText(string $lang): string;

    /**
     * Export the entire message as an associative array.
     *
     * @return array<string,mixed>
     */
    public function toArray(): array;
}
