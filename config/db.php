<?php

class Database{
    public static function connect(){
        $db = new mysqli('35.226.108.21', 'root','awp','icv');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}

