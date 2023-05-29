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
        require './Helpers/prepare.php';
        require './Core/App.php';
        $app = new App;
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