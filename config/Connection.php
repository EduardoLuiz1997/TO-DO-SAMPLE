<?php

    class Connection{


        public static function connect(){
            $host = "";
            $user = "";
            $password = "";
            $db = "";
            try{
                $pdo = new PDO("mysql:host=self::$host;dname=$db", $user, $password, [PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES 'UTF8'"]);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            }catch(Exception $e){
                return "Connection Error";
            }
        }

    }

?>