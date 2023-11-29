<?php require_once('Connections/conn_db.php'); ?>
<?php (!isset($_SESSION)) ? session_start() : "" ?>
<?php require_once('php_lib.php'); ?>

<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <?php require_once("headfile.php"); ?>
</head>

<body>


    <section id="header">
        <?php require_once("navbar.php"); ?>
    </section>
    <section id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <?php require_once("sidebar.php"); ?>
                    <?php require_once("hot.php"); ?>


                </div>
                <div class="col-md-10">
                    <h3>電商藥妝：會員結帳作業</h3>
                    <div class="card" style="width:30rem ;">
                        <h4 class="card-header" style="color:#007bff;">
                            <i class="fas fa-truck fa-flip-horizontal"></i>配送資訊
                        </h4>
                        <div class="card-body pl-3 pt-2 pb-2">
                            <h4 class="card-title">收件人資訊：</h4>
                            <h5 class="card-title">苦茶</h5>
                            <p class="card-text">0912345678</p>
                            <p class="card-text">台中市西屯區工業區一路100號</p>
                            <a href="#" class="btn btn-primary">選擇其他地址</a>
                            <a href="#" class="btn btn-info">新增地址</a>
                        </div>
                    </div>
                    <!-- <div class="table-responsive-md">
                        <table class="table">
                            <table class="table table-hover mt-3">
                                <thead>
                                    <tr class="table-warning">
                                        <td width="10%">產品編號</td>
                                        <td width="10%">圖片</td>
                                        <td width="25%">名稱</td>
                                        <td width="15%">價格</td>
                                        <td width="10%">數量</td>
                                        <td width="15%">小計</td>
                                        <td width="15%">下次再買</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($cart_data = $cart_rs->fetch()) { ?>
                                        <tr>
                                            <td><?php echo $cart_data['p_id']; ?></td>
                                            <td><img src="product_img/<?php echo $cart_data['img_file']; ?>" alt="<?php echo $cart_data['p_name']; ?>" class="img-fluid"></td>
                                            <td><?php echo $cart_data['p_name']; ?>/td>
                                            <td>
                                                <h4 class="color_e600a0 pt-1"><?php echo $cart_data['p_price']; ?></h4>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="number" class="form-control" id="qty[]" name="qty[]" min="1" max="49" value="<?php echo $cart_data['qty']; ?>" cartid="<?php echo $cart_data['cartid']; ?>" require>
                                                </div>
                                            </td>
                                            <td>
                                                <h4 class="color_e600a0 pt-1"><?php echo $cart_data['p_price'] * $cart_data['qty']; ?></h4>
                                            </td>
                                            <td><button type="button" id="btn[]" name="btn[]" class="btn btn-danger" onclick="btn_confirmLink('確定刪除本資料？','shopcart_del.php?mode=1&cartid=<?php echo $cart_data['cartid']; ?>')">取消</button></td>
                                        </tr>

                                    <?php $ptotal += $cart_data['p_price'] * $cart_data['qty'];
                                    } ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="7">累計：<?php echo $ptotal; ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7">運費：100</td>
                                    </tr>
                                    <tr>
                                        <td colspan="7" class="color_red">累計：<?php echo $ptotal + 100; ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </table>
                    </div> -->
                    <div class="table-responsive-md">
                        <table class="table">
                            <table class="table table-hover mt-3">
                                <thead>
                                    <tr class="bg-primary">
                                        <td width="10%">產品編號</td>
                                        <td width="10%">圖片</td>
                                        <td width="30%">名稱</td>
                                        <td width="15%">價格</td>
                                        <td width="15%">數量</td>
                                        <td width="20%">小計</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="product_img/zoom-front-174388.webp" alt="Maybelline 媚比琳純淨礦物極效幻膚BB凝露 升級版 SPF 50/PA++++ 01白皙色" class="img-fluid"></td>
                                        <td>Maybelline 媚比琳純淨礦物極效幻膚BB
                                            凝露 升級版 SPF 50/PA++++ 01白皙色</td>
                                        <td>
                                            <h4 class="color_e600a0 pt-1">$125</h4>
                                        </td>
                                        <td>1</td>
                                        <td>
                                            <h4 class="color_e600a0 pt-1">$125</h4>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="product_img/zoom-front-174388.webp" alt="Maybelline 媚比琳純淨礦物極效幻膚BB凝露 升級版 SPF 50/PA++++ 01白皙色" class="img-fluid"></td>
                                        <td>Maybelline 媚比琳純淨礦物極效幻膚BB
                                            凝露 升級版 SPF 50/PA++++ 01白皙色</td>
                                        <td>
                                            <h4 class="color_e600a0 pt-1">$125</h4>
                                        </td>
                                        <td>1</td>
                                        <td>
                                            <h4 class="color_e600a0 pt-1">$125</h4>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="product_img/zoom-front-174388.webp" alt="Maybelline 媚比琳純淨礦物極效幻膚BB凝露 升級版 SPF 50/PA++++ 01白皙色" class="img-fluid"></td>
                                        <td>Maybelline 媚比琳純淨礦物極效幻膚BB
                                            凝露 升級版 SPF 50/PA++++ 01白皙色</td>
                                        <td>
                                            <h4 class="color_e600a0 pt-1">$125</h4>
                                        </td>
                                        <td>1</td>
                                        <td>
                                            <h4 class="color_e600a0 pt-1">$125</h4>
                                        </td>

                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="7">累計：123456789</td>
                                    </tr>
                                    <tr>
                                        <td colspan="7">運費：100</td>
                                    </tr>
                                    <tr>
                                        <td colspan="7" class="color_red">累計：123456889</td>
                                    </tr>
                                    <tr>
                                        <td colspan="7"><button type="button" id="btn04" name="btn04" class="btn btn-danger"><i class="fas fa-cart-arrow-down pr-2"></i>結帳</button></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="scontent">
        <?php require_once("scontent.php"); ?>
    </section>
    <section id="footer">
        <?php require_once("footer.php"); ?>
    </section>
    <?php require_once("jsfile.php"); ?>

</body>

</html>