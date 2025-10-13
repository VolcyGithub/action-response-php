<?php
namespace ARP\Factory;

use ARP\Message\Message;
use ARP\Support\Arr;

class MessageFactory{
    
    protected static $instance = null;
    private $messages = [];

    public function __construct()
    {
        $this->messages = include "../src/config/index.php";
    }

    public static function getInstance(){
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }


    public function createMessage($key) : Message{
      $message = Arr::get($this->messages,$key);
        return new Message($message);
    }

    
}