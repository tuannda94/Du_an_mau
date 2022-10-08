<?php
// File kết nối đến máy CSDL mysql
// host chưa CSDL
$host ="localhost";
// tài khoản của CSDL
$username = "root";
$password = "";
// tên CDSL cần truy cập 
$dbname = "Du_an_mau";

try{
    //  khai báo chuỗi 
    $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8",$username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    echo "có lỗi xẩy ra: " .$e->getMessage();
    throw new PDOException(); 
}