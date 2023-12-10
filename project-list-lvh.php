<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH SẢN PHẨM - LÊ VĂN HOÀNG</title>
</head>
<body>
    <?php
        //đọc dữ liệu và hiển thị
        //1. kết nối
        include("ketnoi-project-lvh.php");
        //2. tạo truy vấn đọc dữ liệu từ bảng
        $sql_lvh = "SELECT * FROM `sanpham_lvh` WHERE 1=1";
        //3. Thưucj thi câu lệnh truy vấn
        $result_lvh = $conn_lvh ->query($sql_lvh);
        //4. duyệt và hiển thị ->tbody

    ?>
    <section>
        <h1>DANH SÁCH SẢN PHẨM - LÊ VĂN HOÀNG</h1>
        <hr/>
        <table width="100%" border="1px">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã </th>
                    <th>Tên</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Thành tiền</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result_lvh->num_rows > 0) {
                        $stt = 0;
                    while ($row_lvh = $result_lvh->fetch_assoc()) {
                        $stt++;
                ?>
                    <tr>
                    <td><?php echo $stt; ?></td>
                    <td><?php echo $row_lvh["MA_LVH"]; ?></td>
                    <td><?php echo $row_lvh["TEN_LVH"]; ?></td>
                    <td><?php echo $row_lvh["SOLUONG_LVH"]; ?></td>
                    <td><?php echo $row_lvh["DONGIA_LVH"]; ?></td>
                    <td><?php echo $row_lvh["DONGIA_LVH"] * $row_lvh["SOLUONG_LVH"]; ?></td>
                    <td><?php echo $row_lvh["TRANGTHAI_LVH"]; ?></td>
                    <td>
                        <a href="project-edit-lvh.php?ma_lvh=<?php echo $row_lvh["MA_LVH"]; ?>">
                            Sửa
                        </a>
                        <a href="project-list-lvh.php?ma_lvh=<?php echo $row_lvh["MA_LVH"]; ?>" 
                            onclick="if (confirm('Bạn có muốn xóa không')) {return true;}else{return fals;}">
                            Xóa</a>

                    </td>
                </tr>
                <?php
                } 
                    } else {
                ?>
                    <tr>
                        <td colspan="9">Chưa có dữ liệu</td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </section>
    <?php
        // xử lý với chức năng xóa
          if (isset($_GET["ma_lvh"])) {
            // thực hiện chức năng xóa sản phẩm theo ma_lvh
            $ma_lvh = $_GET["ma_lvh"];
            // tạo truy vấn xóa
            $sql_delete_lvh = "DELETE FROM sanpham_lvh WHERE MA_LVH='$ma_lvh'";
            //Thực hiện truy vấn
            if ($conn_lvh->query($sql_delete_lvh)) {
                header("Location: project-list-lvh.php");
            } else {
                echo "<script>alert('Lỗi xóa')</script>";
            }
        }  
    ?>
</body>
</html>