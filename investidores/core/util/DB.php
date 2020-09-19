<?php
require_once('config.php');

class DB{
    private static $instance;
    
    public static function getInstance(){
        if(!isset(self::$instance)){
            try{
                self::$instance = new \PDO("pgsql:dbname=" . DB_NAME . ";user=" . DB_USER . ";password=" . DB_PASS . ";host=" . DB_HOST . ";port=" . DB_PORT);
                self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        }
        return self::$instance;
    }
    public static function prepare($sql){
        return self::getInstance()->prepare($sql);
    }
}
