<?php
header('Access-contorl-Allow-Origin:*');
header('Content-Type:application/json;charset=utf-8');

require_once('Connections/conn_db.php');

if (isset($_GET['p_id'])) {
    $p_id = $_GET['p_id'];
    $qty = $_GET['qty'];
    $u_ip = $_SERVER['REMOTE_ADDR'];
    $query = "INSERT INTO cart(p_id,qty,ip) VALUES (" . $p_id . "," . $qty . ",'" . $u_ip . "');";
    $result = $link->query($query);
    if ($result) {
        $retcode = array("c" => "1", "m" => '謝謝您～產品已加入購物車中！');
    } else {
        $retcode = array("c" => "0", "m" => '資料無法寫入後台資料庫，請聯繫客服人員。');
    }
    echo json_encode($retcode, JSON_UNESCAPED_UNICODE);
}
return;
