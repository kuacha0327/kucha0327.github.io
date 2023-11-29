<?php require_once('Connections/conn_db.php'); ?>
<?php (!isset($_SESSION)) ? session_start() : "" ?>
<?php require_once('php_lib.php'); ?>

<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <?php require_once("headfile.php"); ?>
    <style type="text/css">
        table input:invalid {
            border: solid red 3px;
        }
    </style>
</head>

<body>


    <section id="header">
        <?php require_once("header.php") ?>
    </section>
    <section id="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <!-- 購物車查詢   -->
                    <?php require_once("cart_content.php") ?>
                </div>
            </div>
        </div>
    </section>

    <section id="scontent">

    </section>
    <section id="footer">
        <?php require_once("footer.php"); ?>
    </section>
    <?php require_once("jsfile.php"); ?>




    <script type="text/javascript">
        // 改寫數量
        $("input").change(function() {
            var qty = $(this).val();
            const cartid = $(this).attr("cartid");
            if (qty <= 0 || qty >= 50) {
                alert("更改數量需大於0以上及小於50以下。")
                return false;
            }
            $.ajax({
                url: 'change_qty.php',
                type: 'post',
                dataType: 'json',
                data: {
                    cartid: cartid,
                    qty: qty,
                },
                success: function(data) {
                    if (data.c == true) {
                        // alert(data.m);
                        window.location.reload();
                    } else {
                        alert(data.m);
                    }
                },
                error: function(data) {
                    alert("系統目前無法連接到後台資料庫");
                }
            });
        });
    </script>


</body>

</html>