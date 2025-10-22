<?php

namespace ARP\Http;

/**
 * Class Client
 *
 * Handles client-related information such as IP address
 * and preferred language, based on HTTP headers.
 */
class Client
{

    public string $preferredLanguage = "en";
    
    /**
     * Get the client's IP address.
     *
     * @return string
     */
    public static function getIp(): string
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }

        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($ips[0]);
        }

        return $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
    }

    /**
     * Get the preferred language of the client
     * based on the "Accept-Language" header.
     *
     * @param string $default Fallback language (default: 'en')
     * @return string Two-letter ISO language code
     */
    public static function getPreferredLanguage(string $default = 'en'): string
    {
        if (empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            return $default;
        }

        // Example header: "fr-FR,fr;q=0.9,en-US;q=0.8,en;q=0.7"
        $langs = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
        if (empty($langs)) {
            return $default;
        }

        // Extract primary language code (first 2 letters)
        $lang = substr($langs[0], 0, 2);
        return preg_match('/^[a-z]{2}$/i', $lang) ? strtolower($lang) : $default;
    }

    /**
     * Detect language with priority:
     * 1. User override via ?lang or session
     * 2. Browser Accept-Language
     * 3. Default fallback
     *
     * @param string $default
     * @return string
     */
    public static function detectLanguage(string $default = 'en'): string
    {
        if (isset($_GET['lang'])) {
            $_SESSION['lang'] = $_GET['lang'];
        }

        if (!empty($_SESSION['lang'])) {
            return $_SESSION['lang'];
        }

        return self::getPreferredLanguage($default);
    }

    /**
     * Set the preferred language (two-letter ISO code).
     *
     * @param string $lang   Language code (e.g. "en" or "en-US")
     * @param bool   $persist If true and a session is active, store in $_SESSION['lang']
     * @return self
     * @throws \InvalidArgumentException When $lang is not a valid two-letter code
     */
    public function setPreferredLanguage(string $lang, bool $persist = false): self
    {
        $lang = strtolower(substr(trim($lang), 0, 2));

        if (!preg_match('/^[a-z]{2}$/', $lang)) {
            throw new \InvalidArgumentException('Invalid language code. Expect a two-letter ISO code.');
        }

        $this->preferredLanguage = $lang;

        if ($persist && session_status() === PHP_SESSION_ACTIVE) {
            $_SESSION['lang'] = $lang;
        }

        return $this;
    }
}