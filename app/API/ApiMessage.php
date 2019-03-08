<?php

namespace App\API;

class ApiMessage{
    public static function returnMessage($message){
        return ['message' => $message];
    }
}