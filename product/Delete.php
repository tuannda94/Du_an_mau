<?php
require_once "../model/header.php";
require_once "../model/connection.php";

$mahanghoa = $_GET['mahanghoa'];
//SQL DELETE
$sql = "DELETE FROM hanghoa WHERE mahanghoa=$mahanghoa";
$stmt = $conn->prepare($sql);
$stmt->execute();
//Chuyển hướng
setcookie('success', 'Xóa dữ liệu thành công', time() + 1);

header("location: ../product/manager-product.php");
exit;