<?php 
require_once "../model/header.php";
require_once "../model/connection.php";

if (isset($_POST['btn_luu'])) {
    $maloai = $_POST['maloai'];
    $tenloai = $_POST['tenloai'];
    //Validate
    $kiemtra = [];

    

    //validate page, price
    if ($maloai == '') {
        $kiemtra['maloai'] = "Bạn  chưa nhập mã loại";
    }
    if ($tenloai == '') {
        $kiemtra['tenloai'] = "Bạn chưa nhập tên loại";
    }

    if (!$kiemtra) {
        //Insert
        $sql = " UPDATE loai SET maloai='$maloai',tenloai='$tenloai' WHERE maloai=$maloai";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Chuyển hướng
        setcookie('success', 'Cập nhật dữ liệu thành công', time() + 1);

        header("location: ../type/manager-type.php");
        exit;
    }
}
    $maloai = $_GET['maloai'];
    $sql = "SELECT * FROM loai ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $loai = $stmt->fetch(PDO::FETCH_ASSOC);


?>

            <section>
                <h2>Thêm sản phẩm</h2>
                <form action=""method="post" enctype="multipart/form-data">
              <div>
                <p>MÃ HÀNG HÓA</p>
                <input type="text" name="maloai" value="<?= $loai['maloai'] ?>">
                   <span style="color: red;">
                     <?php echo $kiemtra['maloai'] ?? '' ?>
                   </span>
                
                <p>TÊN LOẠI HÀNG</p>
                <input  type="text" name= 'tenloai' value="<?= $loai['tenloai'] ?>">   
                  <span  style="color: red;">
                    <?php echo $kiemtra['tenloai'] ?? '' ?>
                  </span>   
                 <button class="normal btn" type="submit" name ="btn_luu"> Submit</button>    
              </div>
                </form>

            </section>
        </div>
    </body>
</html>