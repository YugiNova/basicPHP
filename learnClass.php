<?php 
    
    Class Cat{
        //Attributes
        public $name;
        private $color;
        protected $foot;

        public function __construct($name,$color,$foot){
            $this->name = $name;
            $this->color = $color;
            $this->foot = $foot;
        }

        //Method
        public function eat(){
            echo '<br>'.'An';
        }

        public function run(){
            echo '<br>'.'chay';
        }

        public function speak(){
            echo '<br>'.'gau gau';
        }

        //setter
        public function setName($name){
            $this->name = $name;
        }

        public function setColor($color){
            $this->color = $color;
        }

        public function setFoot($foot){
            $this->foot = $foot;
        }

        //getter
        public function getName(){
            return $this->name;
        }

        public function getColor(){
            return $this->color;
        }

        public function getFoot(){
            return $this->foot;
        }

        public function __desstruct(){
           
        }
    }

    //cat instance of Class Cat
    $cat = new Cat("Meoooo","black",4);
    // $cat->name = "Meo";
    // $cat->color = "black";
    // $cat->foot = 4;

    // echo "Cat name: $cat->name, color: $cat->color, foot: $cat->foot";
    echo '<br>'.$cat->getName();
?>