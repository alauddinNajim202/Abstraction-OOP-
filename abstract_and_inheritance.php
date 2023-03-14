<?php   

    abstract class Storage {
        protected $ip;
        abstract public function save();


    }

    abstract class Database extends Storage{
        abstract public function connect();
    }

    abstract class FileSystem extends Storage{
        abstract public function mount();
    }


    class Mysql  extends Database{

        public function connect(){
            echo "Connect to mysql <br>";
        }

        public function save(){
            echo "Save to database ";
        }
    }

    class TapeDrive  extends FileSystem{
         public function mount(){
            echo "<br><br>Mount to TapeDrive";
         }

        public function save(){
            echo "<br> Save to tape ";
        }
    }

    $mysql = new Mysql();
    $mysql->connect();
    $mysql->save();

    $tape = new TapeDrive();
    $tape->mount();
    $tape->save();






?>