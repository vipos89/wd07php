<?php
if (!empty($_POST)){
    // select * from users where login = '$login' and password='$password'
    if ($_POST['login'] == 'admin' && $_POST['password'] == '1234'){
        $_SESSION['user'] = [
            'login' => 'admin',
            'name' => 'Ololo'
        ];
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
    <input type="text" name="login">
    <input type="password" name="password">
    <button type="submit">Log in</button>
</form>
</body>
</html>