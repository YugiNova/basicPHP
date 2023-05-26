<?php 
    class NoteModel extends BaseModel{
        const TABLE = 'note';

        public function getNoteList() {
            $data = $this->all(self::TABLE);

            return $data;
        }

        public function getNoteDetail($id) {
            $data = $this->getDataById(self::TABLE,$id);

            return $data[0];
        }

    }
?>