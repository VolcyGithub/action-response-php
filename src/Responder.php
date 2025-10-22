<?php
namespace ARP;

use ARP\Factory\MessageFactory;
use ARP\Http\Client;
use ARP\Http\JsonResponder;

class Responder{

    public static function sendJson($index){
        JsonResponder::respond($index)->send();
    }

    public static function getRawText($index){
       
        echo MessageFactory::getInstance()->createMessage($index)->getText(Client::getPreferredLanguage());
    }
}