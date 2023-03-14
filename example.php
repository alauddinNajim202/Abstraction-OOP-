<?php   

    abstract class person {

        public $name;
        public $age;
        public $gender;

        public function __construct($name, $age, $gender){
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }

        abstract public function Information();

        
    }

    class student extends person{

        
        public function Information(){
            echo "Student Information: <br>";
            
            echo "Name : ". $this->name ."<br>";
            echo "Age : ". $this->age."<br>";
            echo "Gender : ". $this->gender."<br>";
        }

    }

    class employee extends person{

        public function Information(){
            echo " <br> Employee Information: <br>";
            
            echo "Name : ". $this->name."<br>";
            echo "Age : ". $this->age."<br>";
            echo "Gender : ". $this->gender."<br>";
        }

    }

    $std = new student("Alauddin Najim", "23", "Male");
    $std->Information();

    $emp = new employee("Salauddin Sumon", "23", "Male");
    $emp->Information();







?>