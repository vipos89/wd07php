<?php
    include_once __DIR__.'/../src/pages.php';

    if (isset($_GET['page']) && $_GET['page'] == 'form') {
        include __DIR__ . "/../src/form.php";
    } elseif (isset($_GET['page']) && $_GET['page'] == 'form_result') {
        include __DIR__ . "/../src/form_result.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'page') {
        include __DIR__ . "/../src/page.php";
    }
    elseif (!isset($_GET['page'])){
        include __DIR__ . "/../src/main_page.php";
    }






