<?php

    require $_SERVER['DOCUMENT_ROOT'] . "/todo/config/Connection.php";

    class ToDo{

        public function getAllTasks(){
            try{
                $pdo = Connection::connect();

                $stmt = $pdo->prepare("");
                $stmt->execute();

                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }catch(Exception $e){
                return "Server Error";
            }
        }

        public function getTask($param){
            try{
                $pdo = Connection::connect();

                $stmt = $pdo->prepare("");
                $stmt->bindParam("", $param);
                $stmt->execute();

                return $stmt->fetch(PDO::FETCH_ASSOC);
            }catch(Exception $e){
                return "Server Error";
            }
        }

        

    }

?>