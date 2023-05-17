<?php 
    
    Class Animal{
        //Attributes
        private $name;
        private $age;
        private $gender;

        // public function __construct($name,$color,$foot){
        //     $this->name = $name;
        //     $this->age = $age;
        //     $this->gender = $gender;
        // }

        //setter
        public function setName($name){
            $this->name = $name;
        }

        public function setAge($age){
            $this->age = $age;
        }

        public function setGender($gender){
            $this->gender = $gender;
        }

        //getter
        public function getName(){
            return $this->name;
        }

        public function getAge(){
            return $this->age;
        }

        public function getGender(){
            return $this->gender;
        }

        public function makeSound(){
            echo "Make sound from parent";
        }
    }

    Class Cat extends Animal{
        public function makeSound(){
            parent::makeSound();
            echo "Meoz Meoz";
        }
    }

    Class Dog extends Animal{
        public function makeSound(){
            // parent::makeSound();
            echo "Woof Woof";
        }
    }

    $cat = new Cat;
    $cat->setName("Meo");
    $cat->setAge(2);
    $cat->setGender("male");

    $dog = new Dog;
    $dog->setName("Cho");
    $dog->setAge(3);
    $dog->setGender("female");

    echo "Cat: ".$cat->getName().' - Age: '.$cat->getAge().' - Gender: '.$cat->getGender();
    echo "<br>";
    echo "Cat: ".$dog->getName().' - Age: '.$dog->getAge().' - Gender: '.$dog->getGender();

    echo "<br>";
    $cat->makeSound();
    echo "<br>";
    $dog->makeSound();
?>