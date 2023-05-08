<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
            margin: 0;
            font-size: 1.5rem;
        }

        .custom-form button {
            font-size: 1.5rem;
            width: 100%;
        }

        .custom-form p {
            color: red;
            margin: 0;
            margin-bottom: 1rem;
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

require_once('database.php');

$msgEmail = '';
$msgPassword = '';
$msgConfirm = '';
$msgAvatar = '';

$errors = [
    "email" => [],
    "password" => []
];



if (isset($_POST['register'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm'];
    $avatar = $_FILES["avatar"];

    //validate email
    if (empty($email)) {
        $msgEmail = "Email is required";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msgEmail = "Email not correct format";
    }

    //validate password
    if (empty($password)) {
        $msgPassword = "Password is required";
    } else if (strlen(trim($password)) < 6) {
        $msgPassword = "Password must be over 6 character";
    }

    //validate confirm
    if (empty($confirmPassword)) {
        $msgConfirm = "Confirm password is required";
    } else if ($confirmPassword !== $password) {
        $msgConfirm = "Confirm password and password not match";
    }

    //validate image
    if ($_FILES['avatar']['name'] === "") {
        $msgAvatar = "Avatar is required";
    } else if ($avatar["type"] != "image/png" && $avatar["type"] != "image/jpeg") {
        $msgAvatar = "Image is only .png or .jpeg";
    }

    // echo "<pre>";
    // var_dump($_FILES["avatar"]["type"]);
    // echo "</pre>";

    if ($msgEmail === "" && $msgPassword === "" && $msgConfirm === "" && $msgAvatar === "") {
        // echo $email . sha1($password . "random");
        // echo "<br>" . sha1($password . "random");
        $target_dir = "uploads/";
        $target_file = $target_dir . uniqid(true) . "_" . basename($_FILES["avatar"]["name"]);
        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
            echo "Upload thanh cong";
        } else {
            echo "Upload that bai";
        }

        //Add to database
        $date = date('Y-m-d H:i:s');
        $sql = "INSERT INTO user VALUES ('".rand(10,100)."','".$email."','".sha1($password . 'random')."','".$avatar["name"]."','" . $date . "')";

        if ($conn->query($sql) === TRUE) {
            echo "New user create successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // $conn->close();

    } else {
        echo "fail";
    }
}
?>

<body>
    <?php 
        require_once('header.php');
        require_once('header.php');
    ?>
    <section>
        <form method="POST" class="form-signin custom-form" action="<?php echo $_SERVER['PHP_SELF'] ?>"
            enctype="multipart/form-data">
            <h3>Register</h3>
            <input type="text" name="email" class="form-control" placeholder="Email" autofocus>
            <p>
                <?php echo $msgEmail ?>
            </p>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
            <p>
                <?php echo $msgPassword ?>
            </p>
            <input type="password" name="confirm" id="inputPassword" class="form-control"
                placeholder="Conform Password">
            <p>
                <?php echo $msgConfirm ?>
            </p>
            <input name="avatar" class="form-control" type="file" id="formFile">
            <p>
                <?php echo $msgAvatar ?>
            </p>
            <button name="register" class="btn btn-lg btn-success btn-block" type="submit"
                value="Register">Register</button>
        </form>
    </section>

    <?php
        include_once('footer.php');
        include_once('footer.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>