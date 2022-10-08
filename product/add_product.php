<?php
require_once "../model/header.php";
require_once "../model/connection.php";
if (isset($_POST['btn_luu'])) {
    $mahanghoa = $_REQUEST['mahanghoa'];
    $tenhanghoa = $_REQUEST['tenhanghoa'];
    $hinhanh = $_REQUEST['hinhanh'];
    $dongia = $_REQUEST['dongia'];
    $mucgiamgia = $_REQUEST['mucgiamgia'];
    $maloai = $_REQUEST['maloai'];
    $ngaynhap = $_REQUEST['ngaynhap'];
    $mota = $_REQUEST['mota'];
    $trangthai = $_REQUEST['trangthai'];
    $soluotxem = $_REQUEST['soluotxem'];
  
    $kiemtra = [];
    if ($mahanghoa == '') {
        $kiemtra['maloai'] = "Bạn chưa nhập Mã hàng";
    }
  
    if ($tenloai == '') {
        $kiemtra['tenloai'] = "Bạn chưa nhập tên loại";
     }
    
  
    
    if(!$kiemtra){
      $sql = "INSERT INTO loai(maloai, tenloai) VALUES('$maloai', '$tenloai')";
    
     $stmt = $conn->prepare($sql);
     $stmt->execute();
     setcookie('success', 'Thêm dữ liệu thành công', time() + 1);
  
     header("location: ../type/manager-type.php");
     exit;
    }
   
  }

?>
            <section>
                <h2>Thêm sản phẩm</h2>
                <form action="">
                    <div>
                        <p>MÃ HÀNG HÓA</p>
                        <input type="text">
                        <p>ĐƠN GIÁ</p>
                        <input type="text">
                        <p>GIẢM GIÁ</p>
                        <input type="text">
                        <p>HÀNG ĐẶC BIỆT</p>
                        <span>
                            <input type="radio" value="" name="normal">Đặc biệt
                            <input type="radio" value="" name="normal">Bình
                            thường
                        </span>
                    </div>
                    <div>
                        <p>TÊN HÀNG HÓA</p>
                        <input type="text">
                        <p>LOẠI HÀNG </p>
                        <select name="" id="">
                            <option value="">Chọn loại hàng</option>
                            <option value="">Quần áo nam</option>
                            <option value="">Quần áo nữ</option>
                            <option value="">Trang sức</option>
                        </select>
                        <p>NGÀY NHẬP</p>
                        <input type="text">
                        <p>HÌNH ẢNH</p>
                        <span><input type="file"></span>
                    </div>
                    <button class="normal btn" type="submit" name="btn_luu">Submit</button>
                </form>

            </section>
        </div>
    </body>
</html>