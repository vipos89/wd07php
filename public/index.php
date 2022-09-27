<?php

    /**
     * @var array $pages
     */

    require __DIR__.'/../src/pages.php';


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
    <?php foreach ($pages as $page):?>
        <div class="post">
            <h2><?=$page['title']?></h2>
            <p><?=$page['content']?></p>
            <a href="#">Link</a>
        </div>
    <?php endforeach; ?>
</body>
</html>















