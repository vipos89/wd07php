<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $errors = [];
    if (!isset($_POST['password']) || empty($_POST['password'])){
       $errors['password'] =  'Empty password';
    }

//    if ($_POST['password'] !== $_POST['confirm_password']){
//        $errors['confirm_password']  = 'Not equals passwords';
//    }

    if (empty($errors)){
//        var_dump(4444);
            $login = $_POST['login'];
            $password = trim($_POST['password']);
            $password = md5($password);
            $sql = "INSERT INTO `users` (`login`, `password`) VALUES ('$login', '$password');";
            var_dump($sql);
            mysqli_query($connection, $sql);
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="login" required>
    <input type="password" name="password" required>
    <input type="password" name="confirm_password" required>
    <button type="submit">Register</button>
</form>
</body>
</html>
