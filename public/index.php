<?php
    session_start();
    const BASE_DIR = __DIR__;
    include_once BASE_DIR . "/../src/functions.php";
    include_once BASE_DIR . "/../src/db.php";
    $url = $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);
    $url = $url[0];

    if ($url == '/') {
        include_once BASE_DIR . "/../src/pages/blog.php";
    } elseif ($url == '/add_post_form') {
        include_once BASE_DIR . "/../src/pages/add_post.php";
    }
    elseif ($url == '/image_form') {
        include_once BASE_DIR . "/../src/pages/image_form.php";
    }
    elseif ($url == '/edit_post') {
        include_once BASE_DIR . "/../src/pages/edit_post.php";
    }
    elseif ($url == '/login'){
        include_once BASE_DIR . "/../src/pages/login.php";
    }
    elseif ($url == '/register'){

        include_once BASE_DIR . "/../src/pages/register.php";
    }
    elseif ($url == '/delete_page') {
        $id = $_GET['post'];
        $res = mysqli_query($connection,
            "select * from posts where id = $id");
        $page = mysqli_fetch_assoc($res);

        if (isset($page['img']) && !empty($page['img'])){
            $path = __DIR__.$page['img'];
           if (file_exists($path) && is_file($path)){
               unlink($path);
           }
        }
       $sql = "DELETE FROM posts where id = $id";
       mysqli_query($connection, $sql);
       // redirect
    }
    elseif (strpos($url, '/page/') === 0) {
        $tmp = explode('/', $url);
        $pageId = array_pop($tmp);
        include_once __DIR__ . "/../src/pages/page.php";
    }







