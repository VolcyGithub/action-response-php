<?php
namespace ARP;

use ARP\Factory\MessageFactory;
use ARP\Http\JsonResponder;

class Responder{

    public static function sendJson($index){
        JsonResponder::respond($index)->send();
    }

    public static function getRawText($index){
        return MessageFactory::getInstance()->createMessage($index);
    }
}