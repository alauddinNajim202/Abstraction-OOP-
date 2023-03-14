<?php

    abstract class Database{
        static public $connection;

        static public function getConnectionCount(){
            echo "<br> Connection Count: ". self :: $connection;
        }

        static public function increaseCount(){
             self :: $connection++;
        }

        abstract public function connect();
    }

    class MySQL extends Database{

        public function connect(){
            Database :: increaseCount();
            echo "<br> Connect to database";
        }


        public function save(){
            echo "<br> Save to Database";
        }


    }


    $mysql = new MySQL();
    $mysql->connect();
    $mysql->save();
    Database :: getConnectionCount();






?>