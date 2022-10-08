<?php 
require_once "../model/header.php";
require_once "../model/connection.php";

if (isset($_POST['btn_luu'])) {
  $maloai = $_REQUEST['maloai'];
  $tenloai = $_REQUEST['tenloai'];

  $kiemtra = [];
  if ($maloai == '') {
      $kiemtra['maloai'] = "Bạn chưa nhập Mã loại";
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
                <form action=""method="post" enctype="multipart/form-data">
              <div>
                <p>MÃ HÀNG HÓA</p>
                <input  type="text" name ='maloai'>
                  <span style="color: red;">
                     <?php echo isset($kiemtra['maloai']) ? $kiemtra['maloai'] : '' ?>
                  </span>
                <p>TÊN LOẠI HÀNG</p>
                <input  type="text" name= 'tenloai'>   
                  <span  style="color: red;">
                     <?php echo isset($kiemtra['tenloai']) ? $kiemtra['tenloai'] : '' ?>
                  </span>   
                 <button class="normal btn" type="submit" name ="btn_luu"> Submit</button>    
              </div>
                </form>

            </section>
        </div>
    </body>
</html>