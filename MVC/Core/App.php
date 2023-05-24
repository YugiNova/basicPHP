<?php 
    class App {
        public $action;
        private $controller;

        public function __construct(){
            require './Controllers/BaseController.php';
            if(isset($_GET['url'])){
                $url = explode("/",$_GET['url']);
                $controller = $url[0];
                $action = $url[1];


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

                call_user_func_array(array($objectController,$action),[]);
                // $objectController->$action();
        }
    }
    }
?>
