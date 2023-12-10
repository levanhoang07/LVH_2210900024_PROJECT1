<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit project list- LÊ VĂN HOÀNG</title>
</head>
<body>
    <?php
        // Kết nối đến máy chủ
        include("ketnoi-project-lvh.php");
        // Đọc thông tin sản phẩm cần chỉnh sửa
        if (isset($_GET["ma_lvh"])) {
            $ma_lvh = $_GET["ma_lvh"];
            // Tạo truy vấn để lấy thông tin sản phẩm
            $sql_edit_lvh = "SELECT * FROM `sanpham_lvh` WHERE MA_LVH = '$ma_lvh'";
            $result_edit_lvh = $conn_lvh->query($sql_edit_lvh);
            $row_edit_lvh = $result_edit_lvh->fetch_assoc();
        } else {
            header("Location: project-list-lvh.php");
        }
    ?>
    <section>
        <h1>Edit project list- LÊ VĂN HOÀNG</h1>
        <form name="frm_lvh" method="post" action="">
            <table border="1" width="100%" cellspacing="5" cellpadding="5">
                <tbody>
                    <tr>
                        <td>Mã</td>
                        <td>
                            <input type="text" name="MA_LVH" id="MA_LVH" readonly value="<?php echo $row_edit_lvh["MA_LVH"]; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tên</td>
                        <td>
                            <input type="text" name="TEN_LVH" id="TEN_LVH" value="<?php echo $row_edit_lvh["TEN_LVH"]; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Số lượng</td>
                        <td>
                            <input type="number" name="SOLUONG_LVH" id="SOLUONG_LVH" value="<?php echo $row_edit_lvh["SOLUONG_LVH"]; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Đơn giá</td>
                        <td>
                            <input type="number" name="DONGIA_LVH" id="DONGIA_LVH" value="<?php echo $row_edit_lvh["DONGIA_LVH"]; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Trạng thái</td>
                        <td>
                            <select name="TRANGTHAI_LVH">
                                <option value="1" <?php if ($row_edit_lvh["TRANGTHAI_LVH"] == 1) { echo "selected"; } ?>>Hoạt động</option>
                                <option value="0" <?php if ($row_edit_lvh["TRANGTHAI_LVH"] == 0) { echo "selected"; } ?>>Không hoạt động</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Cập nhật - Lê Văn Hoàng" name="btnSubmit_LVH">
                            <input type="reset" value="Hủy - Lê Văn Hoàng" name="btnReset_LVH">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </section>

    <?php
        // Xử lý cập nhật thông tin sản phẩm
        if (isset($_POST["btnSubmit_LVH"])) {
            $ma_lvh = $_POST["MA_LVH"];
            $ten_lvh = $_POST["TEN_LVH"];
            $soluong_lvh = $_POST["SOLUONG_LVH"];
            $dongia_lvh = $_POST["DONGIA_LVH"];
            $trangthai_lvh = $_POST["TRANGTHAI_LVH"];
            
            // Tạo truy vấn cập nhật thông tin sản phẩm
            $sql_update_lvh = "UPDATE sanpham_lvh SET MA_LVH='$ma_lvh', SOLUONG_LVH='$soluong_lvh', DONGIA_LVH='$dongia_lvh', TRANGTHAI_LVH='$trangthai_lvh' WHERE MA_LVH='$ma_lvh'";

            
            // Thực hiện truy vấn cập nhật
            if ($conn_lvh->query($sql_update_lvh)) {
                header("Location: project-list-lvh.php");
            } else {
                echo "<script>alert('Lỗi cập nhật')</script>";
            }
        }
    ?>
</body>
</html>
