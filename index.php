<?php require_once('Connections/conn_db.php'); ?>
<?php (!isset($_SESSION)) ? session_start() : "" ?>

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
        <!-- NEWS -->
        <div class="title">
            <p class="p1">N E W S</p>
        </div>
        <!-- Carousel，圖片出處：https://goodmondays.ca/pages/contact -->
        <div class="container-fulid">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/a3.webp" class="d-block w-100" alt="..." style="height: 630px;">
                            </div>
                            <div class="carousel-item">
                                <img src="img/a2.webp" class="d-block w-100" alt="..." style="height: 630px;">
                            </div>
                            <div class="carousel-item">
                                <img src="img/a1.webp" class="d-block w-100" alt="..." style="height: 630px;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- GOODS -->
        <div class="title">
            <div data-aos="fade-down" data-aos-duration="1500">
                <p class="p2">G O O D S</p>
            </div>
        </div>
        <div class="container-fulid mb-5">
            <div class="row justify-content-center text-center">
                <div class="col-md-2 goods_set" data-aos="fade-down" data-aos-duration="1500"><img src="img/G1.png" alt="" class="goods_img">
                    <p>手機殼</p>
                </div>
                <div class="col-md-2 goods_set" data-aos="fade-up" data-aos-duration="1500"><img src="img/G2.png" alt="" class="goods_img">
                    <p>AirPods保護殼</p>
                </div>
                <div class="col-md-2 goods_set" data-aos="fade-down" data-aos-duration="1500"><img src="img/G3.png" alt="" class="goods_img">
                    <p>文具用品</p>
                </div>
                <div class="col-md-2 goods_set" data-aos="fade-up" data-aos-duration="1500"><img src="img/G4.png" alt="" class="goods_img">
                    <p>生活用品</p>
                </div>
                <div class="col-md-2 goods_set" data-aos="fade-down" data-aos-duration="1500"><img src="img/G5.png" alt="" class="goods_img">
                    <p>其他</p>
                </div>
            </div>
        </div>
        <!-- BRAND -->
        <div class="title">
            <div data-aos="fade-down" data-aos-duration="1500">
                <p class="p2">B R A N D S</p>
            </div>
        </div>
        <div class="container-fulid">
            <div class="row justify-content-center mx-auto brand_set">
                <div class="col-md-3"><img src="img/B1.png" alt="" class="brands_img" data-aos="fade-down-right" data-aos-duration="1500">
                </div>
                <div class="col-md-3">
                    <img src="img/B2.png" alt="" class="brands_img" data-aos="fade-down-left" data-aos-duration="1500">
                </div>
            </div>
            <div class="row justify-content-center mx-auto brand_set">
                <div class="col-md-3">
                    <img src="img/B3.png" alt="" class="brands_img" data-aos="fade-up-right" data-aos-duration="1500">
                </div>
                <div class="col-md-3">
                    <img src="img/B4.png" alt="" class="brands_img" data-aos="fade-up-left" data-aos-duration="1500">
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