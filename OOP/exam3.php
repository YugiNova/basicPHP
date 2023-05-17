<?php 
    Class Circle {
        const PI = 3.14;
        private $r;

        public function __construct ($r) {
            $this->r = $r;
        }

        function getArea(){
            return $this->r * 2 * pi();
        }

        function getCircum(){
            return pow($this->r,2) * self::PI;
        }
    }

    $circle = new Circle(5,10);

    echo "Dien tich hinh tron la: ". $circle->getArea()."<br>";
    echo "Chu vi hinh tron la: ". $circle->getCircum()."<br>";

    echo "PI : ".Circle::PI;
?>