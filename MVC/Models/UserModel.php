<?php 
    class UserModel extends BaseModel{
        const TABLE = 'user';

        public function getUserList() {
            $data = $this->all(self::TABLE);
            return $data;
        }

        public function getUserDetail($id) {
            $data = $this->getDataById(self::TABLE,$id);

            return $data[0];
        }

        public function createUser($data){
            return $this->createData(self::TABLE,$data);
        }

        public function deleteUser($id){
            return $this->deleteData(self::TABLE,$id);
        }

        public function updateUser($data,$id){
            return $this->updateData(self::TABLE,$data,$id);
        }

        public function checkUserExists($email){
            $table = self::TABLE;
            $sql = "SELECT id from $table where email = '$email'";
            $query = mysqli_query($this->connect,$sql);
            $rows = mysqli_num_rows($query);
            return $rows >0? true:false;
        }

        public function checkLogin($email,$password){
            $table = self::TABLE;
            $sql = "SELECT id from $table where email = '$email' and password = '$password'";
            $query = mysqli_query($this->connect,$sql);
            $rows = mysqli_num_rows($query);
            return $rows >0? true:false;
        }
    }
?>  