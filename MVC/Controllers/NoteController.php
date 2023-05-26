<?php 
    class NoteController extends BaseController{
        private $noteModel;

        public function __construct(){
            $this->loadModel("NoteModel");
            $this->noteModel = new NoteModel;
        }

        public function index (){
            $data = [
                'database' => $this->noteModel->getNoteList(),
            ];

            return $this->view('note.list_note',$data);
        }

        public function create () {
            return $this->view('note.create_note');
        }

        public function detail($id){
            $data = $this->noteModel->getNoteDetail($id);
            return $this->view('note.detail',['note_detail' => $data]);
        }
    }
?>