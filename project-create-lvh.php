<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THÊM SẢN PHẨM - LÊ VĂN HOÀNG</title>
</head>
<body>
    <?php
        // Kiểm tra nút thêm sản phẩm đã được nhấn chưa
        if (isset($_POST["btnSubmit"])) {
            // Kết nối đến cơ sở dữ liệu
            include("ketnoi-project-lvh.php");

            // Lấy dữ liệu từ form
            $MA_LVH = $_POST["MA_LVH"];
            $TEN_LVH = $_POST["TEN_LVH"];
            $SOLUONG_LVH = $_POST["SOLUONG_LVH"];
            $DONGIA_LVH = $_POST["DONGIA_LVH"];
            $TRANGTHAI_LVH = $_POST["TRANGTHAI_LVH"];

            // Thực hiện truy vấn thêm sản phẩm vào cơ sở dữ liệu
            $sql_add_lvh = "INSERT INTO sanpham_lvh (MA_LVH, TEN_LVH, SOLUONG_LVH, DONGIA_LVH, TRANGTHAI_LVH) 
                            VALUES ('$MA_LVH', '$TEN_LVH', '$SOLUONG_LVH', '$DONGIA_LVH', '$TRANGTHAI_LVH')";

            if ($conn_lvh->query($sql_add_lvh)) {
                header("Location: project-list-lvh.php");
            } else {
                echo "<script>alert('Lỗi thêm sản phẩm')</script>";
            }
        }
    ?>
    <section>
        <h1>THÊM SẢN PHẨM - LÊ VĂN HOÀNG</h1>
        <form name="frm_lvh" method="post" action="">
            <table border="1" width="100%" cellspacing="5" cellpadding="5">
                <tr>
                    <td>Mã Sản Phẩm</td>
                    <td><input type="text" name="MA_LVH"></td>
                </tr>
                <tr>
                    <td>Tên Sản Phẩm</td>
                    <td><input type="text" name="TEN_LVH"></td>
                </tr>
                <tr>
                    <td>Số Lượng</td>
                    <td><input type="number" name="SOLUONG_LVH"></td>
                </tr>
                <tr>
                    <td>Đơn Giá</td>
                    <td><input type="number" name="DONGIA_LVH"></td>
                </tr>
                <tr>
                    <td>Trạng Thái</td>
                    <td>
                        <select name="TRANGTHAI_LVH">
                            <option value="1">Hoạt động</option>
                            <option value="0">Không hoạt động</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Thêm Mới - Lê Văn Hoàng" name="btnSubmit">
                    <input type="reset" value="Làm lại - Lê Văn Hoàng" name="btnReset"></td>
                </tr>
            </table>
        </form>
    </section>
</body>
</html>
