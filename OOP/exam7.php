<!-- STATIC METHOD -->

<?php 
    class MyString{
        public static $PI = 3.14;

        public static function calLengthString($string){
            return strlen($string);
        }

        public static function getPI(){
            return self::$PI;
        }
    }

    $length = MyString::calLengthString("saddasdad");
    echo $length;
    echo MyString::$PI;
    echo MyString::getPI();
?>