<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $img = '';
    if (isset($_FILES['my_file'])){
        $img = "/img/".$_FILES['my_file']['name'];
        move_uploaded_file($_FILES['my_file']['tmp_name'],
            __DIR__."/../../public".$img);
    }

    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = "INSERT INTO `posts` (`title`, `content`, `img`)
        VALUES ('$title', '$content', '$img');";
    mysqli_query($connection, $sql);
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
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="title"/>
    <br>
    <br>
    <input type="file" name="my_file">
    <br>
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <br>
    <br>
    <button type="submit">Send</button>
</form>
</body>
</html>
