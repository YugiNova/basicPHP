<!DOCTYPE html>
<html lang="en">

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
        .custom-form p {
            color: red;
            margin: 0;
            text-align: left;
        }
    </style>
</head>

<?php
//Super Global Variables
// $num1 = $_GET['a'] ?? null;
// $num2 = $_GET['b'] ?? null;

// if (!is_null($num1) && !is_null($num1)) {
//     echo "So thu 1: $num1, So thu 2: $num2";
//     echo "<br>Tong: $num1 + $num2 = " . $num1 + $num2;
// }
// var_dump($_POST);

$msgEmail = '';
$msgPassword = '';
$msgConfirm = '';

$errors = [
    "email" => [],
    "password" => []
];



if (isset($_POST['register'])) {
    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm'];
    // $avatar = $_POST['avatar'];

    //validate email
    if(empty($email)){
        $msgEmail = "Email is required";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $msgEmail = "Email not correct format";
    }

    //validate password
    if(empty($password)){
        $msgPassword = "Password is required";
    }
    else if(strlen($msgPassword) < 6){
        $msgPassword = "Password must be over 6 character";
    }

    //validate confirm
    if(empty($confirmPassword)){
        $confirmPassword = "Confirm password is required";
    }
    else if($confirmPassword !== $password){
        $confirmPassword = "Confirm password and password not match";
    }

    if($msgEmail === ""  && $msgConfirm  === ""){
        echo $email.$password;
        echo "<br>".sha1($password."random");
        echo "<br>".strlen($msgPassword);
    }
}
?>

<body>
    <section>
        <form method="POST" class="form-signin custom-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
            <h3>Register</h3>
            <input type="text" name="email" class="form-control" placeholder="Email" autofocus>
            <p><?php echo $msgEmail ?></p>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password"
                >
            <p><?php echo $msgPassword ?></p>
            <input type="password" name="confirm" id="inputPassword" class="form-control" placeholder="Conform Password"
                >
                <p><?php echo $msgConfirm ?></p>
            <input name="avatar" class="form-control" type="file" id="formFile">
            <button name="register" class="btn btn-lg btn-success btn-block" type="submit" value="Register">Register</button>
        </form>
    </section>



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