<?php

use PHPUnit\Framework\TestCase;
use ARP\Http\Client;

class ClientTest extends TestCase
{
    protected $backupServer;
    protected $backupGet;
    protected $backupSession;

    protected function setUp(): void
    {
        // Backup globals before each test
        $this->backupServer = $_SERVER;
        $this->backupGet = $_GET;
        $this->backupSession = $_SESSION ?? [];

        $_SERVER = [];
        $_GET = [];
        $_SESSION = [];
    }

    protected function tearDown(): void
    {
        // Restore globals after each test
        $_SERVER = $this->backupServer;
        $_GET = $this->backupGet;
        $_SESSION = $this->backupSession;
    }

    public function testGetIpFromHttpClientIp(): void
    {
        $_SERVER['HTTP_CLIENT_IP'] = '192.168.1.10';
        $ip = Client::getIp();

        $this->assertEquals('192.168.1.10', $ip);
    }

    public function testGetIpFromXForwardedFor(): void
    {
        unset($_SERVER['HTTP_CLIENT_IP']);
        $_SERVER['HTTP_X_FORWARDED_FOR'] = '203.0.113.5, 10.0.0.1';

        $ip = Client::getIp();
        $this->assertEquals('203.0.113.5', $ip);
    }

    public function testGetIpFromRemoteAddr(): void
    {
        unset($_SERVER['HTTP_CLIENT_IP'], $_SERVER['HTTP_X_FORWARDED_FOR']);
        $_SERVER['REMOTE_ADDR'] = '172.16.0.2';

        $ip = Client::getIp();
        $this->assertEquals('172.16.0.2', $ip);
    }

    public function testGetIpFallbackToDefault(): void
    {
        unset($_SERVER['HTTP_CLIENT_IP'], $_SERVER['HTTP_X_FORWARDED_FOR'], $_SERVER['REMOTE_ADDR']);

        $ip = Client::getIp();
        $this->assertEquals('0.0.0.0', $ip);
    }

    public function testGetPreferredLanguageWithValidHeader(): void
    {
        $_SERVER['HTTP_ACCEPT_LANGUAGE'] = 'fr-FR,fr;q=0.9,en-US;q=0.8,en;q=0.7';

        $lang = Client::getPreferredLanguage();
        $this->assertEquals('fr', $lang);
    }

    public function testGetPreferredLanguageWithInvalidHeader(): void
    {
        $_SERVER['HTTP_ACCEPT_LANGUAGE'] = '###,12,';
        $lang = Client::getPreferredLanguage('en');

        $this->assertEquals('en', $lang);
    }

    public function testGetPreferredLanguageWithEmptyHeader(): void
    {
        unset($_SERVER['HTTP_ACCEPT_LANGUAGE']);

        $lang = Client::getPreferredLanguage('en');
        $this->assertEquals('en', $lang);
    }

    public function testDetectLanguageFromQueryParam(): void
    {
        $_GET['lang'] = 'es';
        $_SESSION = [];

        $lang = Client::detectLanguage('en');
        $this->assertEquals('es', $lang);
        $this->assertEquals('es', $_SESSION['lang']);
    }

    public function testDetectLanguageFromSession(): void
    {
        $_SESSION['lang'] = 'fr';
        $_GET = [];

        $lang = Client::detectLanguage('en');
        $this->assertEquals('fr', $lang);
    }

    public function testDetectLanguageFromBrowser(): void
    {
        $_SERVER['HTTP_ACCEPT_LANGUAGE'] = 'de-DE,de;q=0.9,en;q=0.8';
        $_SESSION = [];
        $_GET = [];

        $lang = Client::detectLanguage('en');
        $this->assertEquals('de', $lang);
    }

    public function testSetPreferredLanguageWithoutPersist(): void
    {
        $client = new Client();
        $client->setPreferredLanguage('fr');

        $this->assertEquals('fr', $client->preferredLanguage);
        $this->assertArrayNotHasKey('lang', $_SESSION);
    }

    public function testSetPreferredLanguageWithPersist(): void
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        $client = new Client();
        $client->setPreferredLanguage('de', true);

        $this->assertEquals('de', $client->preferredLanguage);
        $this->assertEquals('de', $_SESSION['lang']);
    }

    public function testSetPreferredLanguageThrowsExceptionOnInvalidCode(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $client = new Client();
        $client->setPreferredLanguage('123');
    }
}
