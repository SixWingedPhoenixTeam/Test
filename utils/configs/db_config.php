<?php

//Database configuration

class DB_DATA{
    private static $user = "epiz_20700454";
    private static $password = "O9lepmU03s";
    private static $database = "database";
    private static $host = "185.27.134.207";
    
    public static function get_user(){
        if(!isset(self::$user)){
            die("User is not defined!");
        }
        return self::$user;
    }
    
    public static function get_password(){
        if(!isset(self::$password)){
            die("Password is not defined!");
        }
        return self::$password;
    }
    
    public static function get_database(){
        if(!isset(self::$database)){
            die("Database is not defined!");
        }
        return self::$database;
    }
    
    public static function get_host(){
        if(!isset(self::$host)){
            die("Host is not defined!");
        }
        return self::$host;
    }
}

