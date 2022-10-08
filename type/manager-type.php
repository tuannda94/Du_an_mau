<?php 

require_once "../model/connection.php";
$sql = "SELECT * FROM loai";


$stmt = $conn -> prepare($sql);

$stmt -> execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?php 
require_once "../model/header.php";
?>
        <section>
            <h2>Quản lí loại hàng</h2>
            <table>
                <thead>
                    <tr>
                        <td>Mã loại</td>
                        <td>Tên loại</td>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($result as $user) : ?>
                    <tr>
                        <!-- <td width="15%">1</td>
                        <td width="60%">2</td> -->
                        <td width="15%"><?= $user['maloai'] ?></td>
                        <td width="60%"><?= $user['tenloai'] ?></td>
                        <td>
                            <button class="normal update"><a href="Uploat.php?maloai=<?= $user['maloai'] ?>">Update</button>
                            <button class="normal delete"><a onclick="return confirm ('Bạn có chắc xóa không')" href="delete.php?maloai=<?= $user['maloai'] ?>">Delete</button>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </section>
        <button class="normal btn" type ="submit" name = "btn_luu"><a href="./add_type.php">Thêm loại hàng</a></button>
        </div>
    </body>
</html>