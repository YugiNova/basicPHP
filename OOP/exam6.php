<!-- final, interface -->

<?php 
    interface canRun{
        public function canRun();
    }
    interface canSwim{
        public function canSwim();
    }
    interface canFly{
        public function canFly();
    }


    abstract Class Animal{
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

        abstract public function makeSound();

        final public function eat(){
            echo "eat";
        }
    }

    Class Cat extends Animal implements canRun,canSwim{
        public function makeSound(){
            echo __METHOD__;
        }

        public function canRun(){
            echo "Run";
        }

        public function canSwim(){
            echo "Swim";
        }
    }

    Class Bird extends Animal implements canFly{
        public function makeSound(){
            // parent::makeSound();
            echo __METHOD__;
        }

        public function canFly(){
            echo "Fly";
        }
    }

    // $animal = new Animal;

    $cat = new Cat;
    $cat->setName("Meo");
    $cat->setAge(2);
    $cat->setGender("male");


    echo "Cat: ".$cat->getName().' - Age: '.$cat->getAge().' - Gender: '.$cat->getGender();

    echo "<br>";
    $cat->canRun();
?>