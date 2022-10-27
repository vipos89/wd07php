<?php
$res = mysqli_query($connection, "SELECT * FROM wd07.posts where id = {$pageId};");
$page = mysqli_fetch_assoc($res);
include_once __DIR__."/../elements/menu.php";
?>
<!-- Page Header-->
<header class="masthead" style="background-image: url(<?=$page['img']?>)">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1><?=$page['title']?></h1>
                    <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                    <span class="meta">
                                Posted by
                                <a href="#!">Start Bootstrap</a>
                                on August 24, 2022
                            </span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <?=$page['content']?>
            </div>
        </div>
    </div>
</article>
<!-- Footer-->
<?php include_once __DIR__."/../elements/footer.php"?>
