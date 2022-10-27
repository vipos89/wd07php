<?php



if (isset($_FILES['img'])){
    $errors = $_FILES['img']['error'];

    $errors = array_filter($errors, fn ($error) => ($error !=0 ));

    if (empty($errors)){
        for ($i=0; $i<count($_FILES['img']['name']); $i++){
            if (is_executable($_FILES['img']['tmp_name'])){
                continue;
            }
            $extentions = ['jpeg', 'jpg', 'gif', 'png'];
            $ext = strtolower('png');
            if (!in_array($ext, $extentions)){
                continue;
            }
            if ($_FILES['img']['name'][$i]){
                $dir = BASE_DIR."/uploads/";

                if (!file_exists($dir) || !is_dir($dir)){
                    mkdir($dir);
                }

                $path =  $dir.$_FILES['img']['name'][$i];
                if (file_exists($path)){
                    $path =  __DIR__.$dir.uniqid().$_FILES['img']['name'][$i];
                }
                move_uploaded_file($_FILES['img']['tmp_name'][$i], $path);
            }
        }
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
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="img[]" multiple accept="image/*">
    <button type="submit">Send</button>
</form>
</body>
</html>
