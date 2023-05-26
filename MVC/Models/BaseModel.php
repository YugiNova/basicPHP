<?php 
    class BaseModel {
        protected $connect;

        public function __construct(){
            require './Core/database.php';
            $db = new Database();
            $this->connect = $db->connect();
        }

        public function all($table){
            $result = $this->connect->query('select * from '.$table);
            $data = [];

            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            } else {
                echo "0 results";
            }

            return $data;
        }

        public function getDataById($table,$id){
            $result = $this->connect->query('select * from '.$table.' where id='.$id);
            $data = [];

            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            } else {
                echo "0 results";
            }

            return $data;
        }
    }
?>