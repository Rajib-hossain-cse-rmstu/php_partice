<?php
    abstract class Database{
        abstract public function connect();
        abstract public function query();
        abstract public function insertId();
        public function setDB($db){
            //set Database here
        }
        public function setHost($host){
            //set host name here
        }
        public function setUser($user){
            //set user name
        }
        public function setPass($pass){
            //set password 
        }
    }
?>