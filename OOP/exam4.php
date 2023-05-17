<?php 
    Class Student{
        private $id;
        private $name;
        private $age;
        private $gender;

        public function __construct($id,$name,$age,$gender){
            $this->id = $id;
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }

        function getId(){
            return $this->id;
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

        function setId($id){
            $this->id = $id;
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

    Class Teacher{
        private $id;
        private $name;
        private $age;
        private $gender;

        public function __construct($id,$name,$age,$gender){
            $this->id = $id;
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }

        function getId(){
            return $this->id;
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

        function setId($id){
            $this->id = $id;
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

    Class Course {
        private $name;
        private $teacher;
        private $student;

        public function __construct($name,$teacher,$student){
            $this->name = $name;
            $this->teacher = $teacher;
            $this->student = $student;
        }

        function setName($name){
            $this->name = $name;
        }
        function setTeacher($teacher){
            $this->teacher = $teacher;
        }
        function setStudent($student){
            $this->student = $student;
        }

        function getName(){
            return $this->name;
        }
        function getTeacher(){
            return $this->teacher;
        }
        function getStudent(){
            return $this->student;
        }
    }

    $listStudents[] = new Student(1,"Nguyen Van Mot", 18,"female");
    $listStudents[] = new Student(2,"Nguyen Van Hai", 18,"male");
    $listStudents[] = new Student(3,"Nguyen Van Ba", 18,"female");

    $course = new Course("Fullstack",new Teacher(1,"Nguyen Van A",40, "male"),$listStudents);

    echo "Ten khoa hoc : ".$course->getName()."<br><br>";
    echo "Ten Giao vien : ".$course->getTeacher()->getName()."<br><br>";
    foreach($course->getStudent() as $student){
        echo "Ten Hoc viens : ".$student->getName()."<br>";
    }
?>