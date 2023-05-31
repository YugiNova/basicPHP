<?php 
    class BaseModel {
        protected $connect;

        public function __construct(){
            
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

        public function createData($table,$arrayData){
            foreach($arrayData as $key => $value){
                $sqlField[] = $key;
                $sqlValue[] = "'".$value."'";
            }
            $sqlField = implode(",",$sqlField);
            $sqlValue = implode(",",$sqlValue);
            $sql = "INSERT INTO $table ($sqlField) VALUES ($sqlValue)";
            $result = mysqli_query($this->connect,$sql);
            
            return $result;
        }

        public function deleteData($table,$id){
            $sql = "DELETE FROM $table where id = $id";
            $result = mysqli_query($this->connect,$sql);

            return $result;
        }
        

        public function updateData($table,$arrayData,$id){
            foreach($arrayData as $key => $value){
                $sqlField[] = "$key = '$value'";
            }
            $sqlField = implode(",",$sqlField);
            $sql = "UPDATE $table SET $sqlField WHERE id = $id";
            $result = mysqli_query($this->connect,$sql);
            return $result;
        }

        
    }
?>