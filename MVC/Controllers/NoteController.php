<?php 
    class NoteController extends BaseController{
        public function index (){
            return $this->view('note.list_note');
        }

        public function create () {
            return $this->view('note.create_note');
        }
    }
?>