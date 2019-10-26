<?php


abstract class GetMessage
{
    private static $db = '../data/messages.json',
            $messages = [];

    static function findAll(){
        self::$messages = file_get_contents(self::$db);
        self::$messages = json_decode( self::$messages, true);

        return  self::$messages;
    }

    static function find($id){

        foreach (self::findAll() as $message){
            if(in_array($id, $message)){
               $data = $message;
            }
        }
        return $data;
    }

    static function count(){
        return sizeof(self::findAll());
    }
}