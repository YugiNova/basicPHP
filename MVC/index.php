<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trang chu</h1>

    <?php 
        require './Helpers/helper.php';
        // require './Controllers/BaseController.php';
        // if(isset($_GET['url'])){
        //     $url = explode("/",$_GET['url']);
        //     $controller = $url[0];
        //     $action = $url[1];


        //     $controller = explode("_",$controller);
        //     $tempUrl = '';
        //     foreach($controller as $value){
        //         $tempUrl .= ucfirst($value);
        //     }         
        //     $url = './Controllers/'.ucfirst($tempUrl).'Controller.php';
        //     // var_dump($url);
        //     require $url;

        //     $class = $tempUrl.'Controller';
        //     $objectController = new $class;
        //     $objectController->$action();
        // }
        require './Core/App.php';
        $app = new App;

        // class entryPoint {
        //     private $url;
        //     private $controller;
        //     private $action;

        //     public function __construct($url){
        //         require './Controllers/BaseController.php';
        //         $url = explode("/",$url);
        //         $this->$controller = $this->$url[0];
        //         $this->$action = $this->$url[1];
        //     }

        //     public function loadController(){
        //         $controller = explode("_",$controller);
        //         $tempUrl = '';
        //         foreach($controller as $value){
        //             $tempUrl .= ucfirst($value);
        //         }         
        //         $url = './Controllers/'.ucfirst($tempUrl).'Controller.php';
        //         // var_dump($url);
        //         require $url;

        //         $class = $tempUrl.'Controller';
        //         $objectController = new $class;
        //         $objectController->$action();
        //     }
        // }
    ?>

    <a href="index.php?url=user/index">List User</a><br>
    <a href="index.php?url=user/create">Create User</a><br>
    <a href="index.php?url=product_category/index">List Product Category</a><br>
    <a href="index.php?url=product_category/create">Create Product Category</a><br>
    <a href="index.php?url=product/index">List Product</a><br>
    <a href="index.php?url=product/create">Create Product</a><br>
    <a href="index.php?url=note/index">List Note</a><br>
    <a href="index.php?url=note/create">Create Note</a><br>
</body>
</html>