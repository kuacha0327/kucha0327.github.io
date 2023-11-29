<?php
$maxRows_rs = 12;
$pageNum_rs = 0;
if (isset($_GET['pageNum_rs'])) {
    $pageNum_rs = $_GET['pageNum_rs'];
}
$startRow_rs = $pageNum_rs * $maxRows_rs;
if (isset($_GET['search_name'])) {
    // 使用關鍵字查詢
    $queryFirst = sprintf("SELECT * FROM product,product_img,pyclass WHERE p_open=1 AND product_img.sort=1 AND product.p_id=product_img.p_id AND product.classid=pyclass.classid AND product.p_name LIKE '%s' ORDER BY product.p_id DESC", '%' . $_GET['search_name'] . '%');
} elseif (isset($_GET['level']) && $_GET['level'] == 1) {
    // 使用第一類別查詢
    $queryFirst = sprintf("SELECT * FROM product,product_img,pyclass WHERE p_open=1 AND product_img.sort=1 AND product.p_id=product_img.p_id AND product.classid=pyclass.classid AND pyclass.uplink='%d' ORDER BY product.p_id DESC", $_GET['classid']);
} elseif (isset($_GET['classid'])) {
    // 使用產品類別查詢
    $queryFirst = sprintf("SELECT * FROM product,product_img WHERE p_open=1 AND product_img.sort=1 AND product.p_id=product_img.p_id AND product.classid='%d' ORDER BY product.p_id DESC", $_GET['classid']);
} else {
    // 列出產品資料查詢
    $queryFirst = sprintf("SELECT * FROM product,product_img WHERE p_open=1 AND product_img.sort=1 AND product.p_id=product_img.p_id ORDER BY product.p_id DESC");
}


$query = sprintf("%s LIMIT %d,%d", $queryFirst, $startRow_rs, $maxRows_rs);
$pList01 = $link->query($query);
$i = 1;
?>
<?php if ($pList01->rowCount() != 0) { ?>




    <!-- 第一排 -->

    <?php while ($pList01_Rows = $pList01->fetch()) { ?>
        <?php if ($i % 3 == 1) { ?><div class="row text-center"><?php } ?>
            <div class="card col-md-3 gds">

                <a href="goods_content.php?p_id=<?php echo $pList01_Rows['p_id']; ?>"><img src="product_img/<?php echo $pList01_Rows['img_file']; ?>" class="card-img-top product_img" alt="<?php echo $pList01_Rows['p_name']; ?>" title="<?php echo $pList01_Rows['p_name']; ?>"></a>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $pList01_Rows['p_name']; ?></h5>
                    <p class="card-text"><?php echo $pList01_Rows['p_intro']; ?></p>
                    <p>NT<?php echo $pList01_Rows['p_price']; ?></p>
                    <a href="goods_content.php?p_id=<?php echo $pList01_Rows['p_id']; ?>" class="btn btn-primary">更多資訊</a>
                    <button name="button01[]" id="button01[]" type="button" class="btn btn-success " onclick="addcart(<?php echo $pList01_Rows['p_id']; ?>)">加入購物車</button>
                </div>

            </div>
            <?php if ($i % 3 == 0 || $i == $pList01->rowCount()) { ?>
            </div><?php } ?>
    <?php $i++;
    } ?>

<?php } else { ?>
    <div class="alert alert-info" role="alert">
        不好意思，目前無相關產品QQ
    </div>
<?php } ?>