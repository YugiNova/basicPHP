<?php
    class Database {
        const HOST = "localhost";
        const USERNAME = "root";
        const PASSWORD = "";
        const PORT = 3307;
        const DATABASE = "mvc";

        private $connect;

        public function connect(){

            try{
                $this->connect = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DATABASE, self::PORT);

                mysqli_set_charset($this->connect,'utf8');

                if(mysqli_connect_errno() === 0){
                    return $this->connect;
                }

                throw new Exception('Unable to connect');
            }
            catch(\Exception $e){
                throw new \Exception($e->getMessage());
            }            
        }
    }
?>