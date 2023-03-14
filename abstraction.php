<?php

// abstract class can't create object
// abstract methaods can not contain body
// abstract class have must be abstract method and derived class override



//$shape = new Shape(); cannot create object of abstract class
    abstract  class Shape{

        protected static $id;

        public  function __construct(){
            self :: $id++;
        }

        abstract public function getArea();      



    }

    class Circle extends Shape{

        private $radius;

        public  function __construct($radius){
            parent :: __construct();
            $this->radius = $radius;
        }


        public function getArea(){

            $area = $this->radius * $this->radius * pi();

            echo "Circle area with id : " . self::$id . " is " . $area;

        }

    }

    class Rectangle extends Shape{

        private $width;
        private $height;

        public  function __construct($width, $height){
            parent :: __construct();
            $this->width = $width;
            $this->height = $height;
        }



        public function getArea(){

            $area = $this->width *  $this->height ;

            echo "<br> Rectangle  area with id : " . self::$id . " is " . $area;

        }
    }   

    $circle = new Circle(5);
    $circle->getArea();

    $rectangle = new Rectangle(2,3 );
    $rectangle->getArea();

    




?>