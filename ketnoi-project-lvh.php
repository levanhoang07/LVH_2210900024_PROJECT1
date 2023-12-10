<?php
    //kết nối đến máy chủ
    $conn_lvh = new mysqli("Localhost", "root","","project1_lvh");
    if(!$conn_lvh){
        echo "<h2>lỗi:" .mysqli_error( $conn_lvh)."<h2>";
    } else{
        echo"<h2> Xin Chào LÊ VĂN HOÀNG - 2210900024 </h2>";
    }
?>

