<?php
    class UserController extends BaseController{
        private $userModel;

        public function __construct(){
            $this->loadModel("UserModel");
            $this->userModel = new UserModel;
        }

        public function index(){
            $data = [
                'database' => $this->userModel->getUserList(),
            ];
            return $this->view('user.list_user',$data) ;
        }

        public function delete($id){
            $check = $this->userModel->deleteUser($id);
            if($check){
                header('Location: '.'index.php?url=user/index');
            }
            else{
                throw new \Exception('Something went wrong');
            }
        }

        public function create(){
            $errors = [];

            if(isset($_POST['submit'])){
                $name = $_POST['name'];  
                $email = $_POST['email'];
                $password = $_POST['password'];

                

                if(strlen(trim($name)) === 0){
                    $errors['name'][] = "Name is required";
                }

                if (empty($email)) {
                    $errors['email'][] = "Email is required";
                } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors['email'][] = "Email not correct format";
                }else if($this->userModel->checkUserExists($email)){
                    $errors['email'][] = "Email exists from database";
                }
            
                if (empty($password)) {
                    $errors['password'][] = "Password is required";
                } else if (strlen(trim($password)) < 6) {
                    $errors['passsword'][] = "Password must be over 6 character";
                }

                

                if(count($errors) > 0){
                    return $this->view('user.create_user',['errors' => $errors]);
                }
                
                $data = [
                    'name' => $name,
                    'email' => $email,
                    'password' => sha1($password."abc")
                ];

                  
                $check = $this->userModel->createUser($data);

                if($check){
                    header('Location: '.'index.php?url=user/index');
                }
                else{
                    throw new \Exception('Something went wrong');
                }
            }

            return $this->view('user.create_user');
        }

        public function detail(){
            return $this->view('user.detail');
        }

        public function login(){
            if (isset($_POST['login'])) {
    
                $email = $_POST['email'];
                $password = sha1($_POST['password'] . 'abc') ;
                // echo "Email: $email, Password: $password";
            
                $email = trim($email);
                $email = htmlspecialchars($email);
                $email =strip_tags($email);
                
            
                $checkUserSql = $this->userModel->checkLogin($email,$password);

                if ($checkUserSql){
                    $_SESSION['username'] = $email;
                    header('Location: '.'index.php?url=user/index');
                    // echo "Dang nhap thanh cong";
                    var_dump($_SESSION);
                }else{   
                    return $this->view('user.login',['login_errors' => 'Username or password invalid']);
                }
            }

            if(isset($_POST["logout"])){
                unset($_SESSION['username']);
                // session_destroy();
            }
            
            if(isset($_GET["lang"])){
                setcookie('lang',$_GET['lang'],time()+86400);
                $_COOKIE['lang'] = $_GET['lang'];
            }

            return $this->view('user.login');
        }
    }
?>