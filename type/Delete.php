<?php
require_once "../model/header.php";
require_once "../model/connection.php";

$maloai = $_GET['maloai'];
//SQL DELETE
$sql = "DELETE FROM loai WHERE maloai=$maloai";
$stmt = $conn->prepare($sql);
$stmt->execute();
//Chuyển hướng
setcookie('success', 'Xóa dữ liệu thành công', time() + 1);

header("location: ../type/manager-type.php");
exit;