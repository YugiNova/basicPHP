<?php 
    class App {
        public $action;
        private $controller;

        public function __construct(){
            require './Core/database.php';
            require './Controllers/BaseController.php';
            require './Models/BaseModel.php';
            if(isset($_GET['url'])){
                $url = explode("/",$_GET['url']);
                $controller = $url[0];
                $action = $url[1];
                $id = $url[2]??null;

                $controller = explode("_",$controller);
                $tempUrl = '';
                foreach($controller as $value){
                    $tempUrl .= ucfirst($value);
                }         
                $url = './Controllers/'.ucfirst($tempUrl).'Controller.php';
                // var_dump($url);
                require $url;

                $class = $tempUrl.'Controller';
                $objectController = new $class;

                

                call_user_func_array(array($objectController,$action),[$id]);
                // $objectController->$action();
        }
    }
    }
?>
