<?php 
require_once "../model/connection.php";
$sql = "SELECT * From hanghoa";
//Chuẩn bị
$stmt = $conn->prepare($sql);
//Thực thi
$stmt->execute();
//Lấy dữ liệu
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
require_once "../model/header.php";
?>
        <section>
            <h2>Quản lí sản phẩm</h2>
            <table>
                <thead>
                    <tr>
                        <td>Mã hàng hóa</td>
                        <td>hinhanh</td>
                        <td>Tên hàng hóa</td>
                        <td>Đơn giá</td>
                        <td>Giảm giá</td>
                        <td>Lượt xem</td>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($result as $user) : ?>
                    <tr>
                        <td width="12%"><?= $user['mahanghoa'] ?></td>
                        <td width="30%"><?= $user['tenhanghoa'] ?></td>
                        <td width="10%"><?= $user['hinhanh'] ?></td>
                        <td width="10%"><?= $user['dongia'] ?></td>
                        <td width="10%"><?= $user['mucgiamgia'] ?></td>
                        <td width="10%"><?= $user['soluotxem'] ?></td>
                        <td>
                            <button class="normal update"><a href="../product/Delete.php?$user['mahanghoa'] ?>">Update</button>
                            <button class="normal delete"><a onclick="return confirm ('Bạn có chắc xóa không')" href="../product/Delete.php?$user['mahanghoa'] ?>">Delete</button>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </section>
        <button class="normal btn"><a href="../product/add_product.php">Thêm sản phẩm</a></button>
        </div>
    </body>
</html>