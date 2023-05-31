<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body {
            background-color: #f0f2f5;
        }

        section {
            width: 30rem;
            margin: 10rem auto;
        }

        .custom-form {
            text-align: center;
            background-color: white;
            padding: 1rem;
            border-radius: 1rem;
            box-shadow: -1px 4px 10px 7px rgba(0, 0, 0, 0.33);
            -webkit-box-shadow: -1px 4px 10px 7px rgba(0, 0, 0, 0.33);
            -moz-box-shadow: -1px 4px 10px 7px rgba(0, 0, 0, 0.33);
        }

        .custom-form input {
            margin: 1rem 0;
            font-size: 1.5rem;
        }
        .custom-form button {
            font-size: 1.5rem;
        }
    </style>
</head>
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
    <a href="index.php?url=user/login">Login</a><br>
    <a href="index.php?url=user/create">Create User</a><br>
    <a href="index.php?url=product_category/index">List Product Category</a><br>
    <a href="index.php?url=product_category/create">Create Product Category</a><br>
    <a href="index.php?url=product/index">List Product</a><br>
    <a href="index.php?url=product/create">Create Product</a><br>
    <a href="index.php?url=note/index">List Note</a><br>
    <a href="index.php?url=note/create">Create Note</a><br>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>