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
        require './Controllers/BaseController.php';
        if(isset($_GET['controller']) && isset($_GET['action'])){
            $controller = $_GET['controller'];
            $action = $_GET['action'];
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
            $objectController->$action();
        }
        
    ?>

    <a href="index.php?controller=user&action=index">List User</a><br>
    <a href="index.php?controller=user&action=create">Create User</a><br>
    <a href="index.php?controller=product_category&action=index">List Product Category</a><br>
    <a href="index.php?controller=product_category&action=create">Create Product Category</a><br>
    <a href="index.php?controller=product&action=index">List Product</a><br>
    <a href="index.php?controller=product&action=create">Create Product</a><br>
    <a href="index.php?controller=note&action=index">List Note</a><br>
    <a href="index.php?controller=note&action=create">Create Note</a><br>
</body>
</html>