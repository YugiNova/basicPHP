<?php 
    abstract class Shape {
        abstract public function getArea();
    }

    class Retangle extends Shape {
        private $width;
        private $height;
        public function __construct($width,$height){
            $this->width = $width;
            $this->heigth = $height;
        }

        public function getArea(){
            return $this->width * $this->height;
        }
    }

    class Circle extends Shape {
        private $radius;
        public function __construct($radius){
            $this->radius = $radius;
        }

        public function getArea(){
            return pow($this->radius,2) * 3.14;
        }
    }
?>