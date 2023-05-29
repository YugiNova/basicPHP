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
            $errors = [];

            if(isset($_POST['submit'])){
                $content = $_POST['content'];  
                $userId = $_POST['user_id'];

                if(strlen(trim($content)) === 0){
                    $errors['content'][] = "Content is required";
                }

                if($userId === '0'){
                    $errors['userid'][] = "User is required";
                }

                if(count($errors) > 0){
                    return $this->view('note.create_note',['errors' => $errors]);
                }
                $data = [
                    'content' => $content,
                    'user_id' => $userId
                ];
                $check = $this->noteModel->createNote($data);

                if($check){
                    header('Location: '.'index.php?url=note/index');
                }
                else{
                    throw new \Exception('Something went wrong');
                }
            }

            return $this->view('note.create_note');
        }

        public function delete($id){
            $check = $this->noteModel->deleteNote($id);
            if($check){
                header('Location: '.'index.php?url=note/index');
            }
            else{
                throw new \Exception('Something went wrong');
            }
        }

        public function detail($id){
            $data = $this->noteModel->getNoteDetail($id);
            return $this->view('note.detail',['note_detail' => $data]);
        }
    }
?>