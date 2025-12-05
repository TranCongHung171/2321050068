<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            text-align: center;
            margin-top: 20px;
            
        }
        /* th, td  {
            border: 1px solid black;
            padding: 10px;
        } */
        a{ text-decoration: none; color: white;}
        .capnhat{          
            padding: 0 10px;
            color: white;
            border: 1px solid black;
            background-color: #228112ff;
        }
        .xoa{          
            padding: 0 10px;
            color: white;
            border: 1px solid black;
            background-color: #f52d2dff;
        }
        .them{
            color: white; 
            border-radius: 3px; 
            border: 1px solid  #f52d8aff; 
            background-color:  #f52d8aff; 
            padding: 5px;
            
        }

    </style>
</head>
<body>
    <div style="display: flex; ">
        <h1>Thông tin người dùng</h1>
        <div style="margin-top: 35px; margin-left: 20px"><a class="them" href="tong.php?page_layout=themnguoidung"><b>THÊM NGƯỜI DÙNG</b></a></div>
    </div>
    <table border="1">
        <tr>
            <th>Tên đăng nhập</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Vai trò</th>
            <th>Ngày sinh</th>
            <th>Chức năng</th>
        </tr>
        <?php 
        include ('connect.php');
        $sql = "SELECT nd.*, vt.ten_vai_tro FROM nguoi_dung nd JOIN vai_tro vt ON nd.vai_tro_id = vt.id";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row["ten_dang_nhap"] ?></td>
            <td><?php echo $row["ho_ten"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["sdt"] ?></td>
            <td><?php echo $row["ten_vai_tro"] ?></td>
            <td><?php echo $row["ngay_sinh"] ?></td>
            <td>
                <a class="capnhat" href="tong.php?page_layout=capnhatnguoidung&id=<?php echo $row["id"] ?>">Sửa</a>
                <a class="xoa" href="xoanguoidung.php?id=<?php echo $row["id"] ?>">Xóa</a>
            </td>        
        </tr>
        <?php } ?>
    </table>
</body>
</html>