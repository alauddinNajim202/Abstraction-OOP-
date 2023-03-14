<?php

    abstract class Person{

        protected $str_Name = "";
        protected $str_Gender = "";


        public function __construct($name, $gender){

            $this->str_Name = $name;
            $this->str_Gender = $gender;
        }

        abstract public function displayInfo();



    }


    class Teacher extends Person{


        public function __construct($name, $gender){
            parent :: __construct($name, $gender);
        }

         public function displayInfo($separator = ". "){
            if($this->str_Gender == 'M'){
                echo "Mr".$separator .$this->str_Name;
            }else{
                echo "Ms".$separator .$this->str_Name;
            }
         }

    }


    $t1 = new Teacher('Alauddin Najim', 'M');
    $t1->displayInfo();


?>