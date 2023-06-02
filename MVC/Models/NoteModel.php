<?php 
    class NoteModel extends BaseModel{
        const TABLE = 'note';

        public function getNodeListByUserID(){
            $result = $this->connect->query('select * from '.self::TABLE.' where user_id = '.$_SESSION['id']);
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

        public function getNoteList() {
            $data = $this->all(self::TABLE);

            return $data;
        }

        public function getNoteDetail($id) {
            $data = $this->getDataById(self::TABLE,$id);

            return $data[0];
        }


        public function createNote($data){
            return $this->createData(self::TABLE,$data);
        }

        public function deleteNote($id){
            return $this->deleteData(self::TABLE,$id);
        }

        public function updateNote($data,$id){
            return $this->updateData(self::TABLE,$data,$id);
        }
    }
?>  