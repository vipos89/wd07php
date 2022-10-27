<?php
    debug($_SESSION);
    $offset = 0;
    if (isset($_GET['page'])) {
        $offset = ((int)$_GET['page'] - 1) * 15;
    }

    $res = mysqli_query($connection,
        "select * from posts order by id desc limit $offset, 15"
    );

    $pages = mysqli_fetch_all($res, MYSQLI_ASSOC);

    $res = mysqli_query($connection, 'SELECT count(id) as total FROM posts');
    $total = mysqli_fetch_assoc($res);
    $total = $total['total'];
    $pagesCount = ceil($total / 15);

    include_once __DIR__."/../elements/menu.php"
?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('/assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <span class="subheading">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php
                foreach ($pages as $page): ?>
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="/page/<?= $page['id'] ?>">
                            <h2 class="post-title"><?= $page['title'] ?></h2>
                        </a>
                        <p class="post-meta">
                            <a href="/delete_page?post=<?= $page['id'] ?>">DELETE</a>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4"/>
                <?php
                endforeach; ?>
            <!-- Pager-->
            <div class="content">
                <div class="d-flex mb-4">
                    <?php
                        for ($i = 1; $i <= $pagesCount; $i++): ?>
                            <a class="btn btn-primary text-uppercase" href="/?page=<?= $i ?>"><?= $i ?></a>
                        <?php
                        endfor; ?>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Footer-->
<?php include_once __DIR__."/../elements/footer.php"?>
