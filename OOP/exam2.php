<?php 
    Class Retangle {
        private $width;
        private $height;

        public function __construct ($width,$height) {
            $this->width = $width;
            $this->height = $height;
        }

        function getArea(){
            return $this->width * $this->height;
        }

        function getCircum(){
            return ($this->width + $this->height) * 2;
        }
    }

    $retangle = new Retangle(5,10);

    echo "Dien tich hinh chu nhat la: ". $retangle->getArea()."<br>";
    echo "Dien tich hinh chu nhat la: ". $retangle->getCircum()."<br>";
?>