<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Connection
 *
 * @author jbferraz
 */
require_once 'Config.php';
class Connection {
    //put your code here
    public static function getConnection($host, 
            $dbName, $userName, $pass) {
        $dns = "mysql:host=$host;dbname=$dbName;charset=UTF8";
        
        try{
            $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            return new PDO($dns,$userName,$pass, $option);
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
}
return Connection::getConnection($host, $dbName, $user, $pass);//parametros devem ser os mesmo dp config.php