<?php 
    Class Person{
        private $name;
        private $age;
        private $gender;

        public function __construct($name,$age,$gender){
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }

        function getName(){
            return $this->name;
        }
        function getAge(){
            return $this->age;
        }
        function getGender(){
            return $this->gender;
        }

        function setName($name){
            $this->name = $name;
        }
        function setAge($age){
            if($age > 0){
                $this->age = $age;
            }
            else{
                throw new \Exception('Age not valid');
            }
        }
        function setGender($gender){
            $this->gender = $gender;
        }
    }

    $person = new Person("test",30,"male");

    $person->setAge(-1);

    echo "Name : ".$person->getName()."<br>";
    echo "Age : ".$person->getAge()."<br>";
    echo "Gender : ".$person->getGender()."<br>";
?>