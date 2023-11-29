<?php require_once('Connections/conn_db.php'); ?>
<?php (!isset($_SESSION)) ? session_start() : "" ?>
<?php require_once('php_lib.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <?php require_once("headfile.php"); ?>
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
                    <div class="card mb-3">
                        <div class=" row no-gutters pt-4 pb-4">
                            <!-- 左側商品圖片 -->
                            <div class="col-md-3">
                                <?php
                                $SQLstring = sprintf("SELECT * FROM product_img WHERE product_img.p_id=%d ORDER BY sort", $_GET['p_id']);
                                $img_rs = $link->query($SQLstring);
                                $imgList = $img_rs->fetch(); ?>


                                <?php
                                $SQLstring = sprintf("SELECT product.p_id,product.p_name,product.p_price,p_content,product_img.img_id,product_img.p_id
                                FROM product
                                LEFT JOIN product_img 
                                ON product.p_id=%d
                                ", $_GET['p_id']);
                                $pro_rs = $link->query($SQLstring);
                                $pro_data = $pro_rs->fetch(); ?>

                                <img id="showGoods" name="showGoods" src="product_img/<?php echo $imgList['img_file']; ?>" alt="<?php echo $pro_data['p_name']; ?>" title="<?php echo $pro_data['p_name']; ?>" class="img-fluid">
                                <div class="row mt-2">
                                    <?php do { ?>
                                        <div class="col-md-4"><a href="product_img/<?php echo $imgList['img_file']; ?>" rel="group" class="fancybox" title="<?php echo $pro_data['p_name']; ?>"><img src="product_img/<?php echo $imgList['img_file']; ?>" alt="<?php echo $pro_data['p_name']; ?>" title="<?php echo $pro_data['p_name']; ?>" class="img-fluid"></a></div>
                                    <?php } while ($imgList = $img_rs->fetch()); ?>



                                </div>
                            </div>
                            <!-- 右側品項名稱及價格 -->
                            <div class="col-md-5 pl-5">
                                <div class="card-body mt-3">
                                    <h5 class="card-title"><?php echo $pro_data['p_name']; ?></h5>
                                    <p class="card-text"><?php echo $pro_data['p_intro']; ?></p>
                                    <h4>$<?php echo $pro_data['p_price']; ?></h4>
                                    <div class="row mt-3">

                                        <div class="col-md-6">
                                            <div class="input-group input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text color-success" id="inputGroup-sizing-lg">數量</span>
                                                </div>
                                                <input type="number" class="form-control" aria-label="Sizing example input" id="qty" value="1" aria-describedby="inputGroup-sizing-lg">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button name="button01" id="button01" type="button" class="btn btn-success btn-lg" onclick="addcart(<?php echo $pro_data['p_id']; ?>)">加入購物車</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <?php echo $pro_data['p_content'] ?>
                </div>

            </div>

        </div>
    </section>
    <section id="footer">
        <?php require_once("footer.php") ?>
    </section>
    <?php require_once("js_lib.php") ?>
    <script type="text/javascript">
        $(function() {
            $(".card .row.mt-2 .col-md-4 a").mouseover(function() {
                var imgsrc = $(this).children("img").attr("src");
                $("#showGoods").attr({
                    "src": imgsrc
                });
            });
            $(".fancybox").fancybox();
        });
    </script>
</body>

</html>