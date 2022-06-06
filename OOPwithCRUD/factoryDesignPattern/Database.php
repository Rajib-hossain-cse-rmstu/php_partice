<?php 

    spl_autoload_register(function ($class_name){
        include  $class_name . ".php";
    });

    class Database{
        public $driver;
        public $link;

        public function setDriver($driver){
            $this->driver = $driver;
        }
        public function connect(){
            if($this->driver == "mysql"){
                $mngMySql = new ManageMsql();
                $mngMySql->setHost($host);
                $mngMySql->setDB($db);
                $mngMySql->setUser($user);
                $mngMySql->setPass($password);
                $this->link = $mngMySql->connect();
            }elseif($this->driver == "sqlite"){
                $mngSqlite = new ManageSqlite();
                $mngSqlite->setHost($host);
                $mngSqlite->setDB($db);
                $mngSqlite->setUser($user);
                $mngSqlite->setPass($password);
                $this->link = $mngSqlite->connect();
            }
        }
    }
?>