<?php


class Conexao {
    private static $instance;
    public static function getConn() {
        if(!isset(self::$instance)):
            self::$instance = new PDO('mysql:host=localhost;dbname=')

    }
endif;
}

class Crud {
    private $create;
    private $edit;
    private $delete;
    private $read;
    private $deleteFromId;

    private function 
}