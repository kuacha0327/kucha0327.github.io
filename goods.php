<?php require_once('Connections/conn_db.php'); ?>
<?php (!isset($_SESSION)) ? session_start() : "" ?>
<?php require_once('php_lib.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="web.css">
    <title>Renaissance 韓國文創商品代購</title>
</head>

<body>
    <!-- TOP工具列 -->
    <section id="header">
        <?php require_once("header.php") ?>
    </section>
    <!-- BANNER動畫 -->
    <section id="banner">
        <?php require_once("banner.php") ?>
    </section>
    <section id="content">
        <div class="container-fluid goods_list">
            <div class="row">
                <div class="col-md-2">
                    <?php require_once('sidebar.php') ?>
                </div>
                <div class="col-md-8">
                    <?php require_once('breadcrumb.php') ?>
                    <?php require_once('goodslist.php') ?>
                    <?php require_once('changepage.php') ?>
                </div>

            </div>

        </div>
    </section>
    <section id="footer">
        <?php require_once("footer.php") ?>
    </section>
    <?php require_once("js_lib.php") ?>
</body>

</html>