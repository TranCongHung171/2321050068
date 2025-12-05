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
            
        }
        th, td  {
            border: 1px solid black;
            padding: 10px;
        }
        a{ text-decoration: none; color: white;}
        .xoa{
            background-color: red;
            padding: 0 10px;
            color: white;
        }
    </style>
</head>
<body>
    <div style="display: flex; ">
        <h1>Phim</h1>
        <div style="margin:42px 10px"><a class="xoa" href="tong.php?page_layout=themphim">THÊM PHIM</a></div>
    </div>
    <table border="1">
        <tr>
            <th>Tên phim</th>
            <th>Thể loại</th>
            <th>Đạo diễn</th>
            <th>Năm phát hành</th>
            <th>Poster</th>
            <th>Quốc gia</th>
            <th>Số tập</th>
            <th>Trailer</th>
            <th>Mô tả</th>
            <th>Chức năng</th>

        </tr>
        <?php 
        include ('connect.php');
        $sql = "SELECT p.*, q.ten_quoc_gia, nd.ho_ten, t.ten_the_loai FROM phim p JOIN quoc_gia q ON p.quoc_gia_id = q.id JOIN nguoi_dung nd ON p.dao_dien_id = nd.id JOIN phim_the_loai pt ON p.id = pt.phim_id JOIN the_loai t ON pt.the_loai_id = t.id";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row["ten_phim"] ?></td>
            <td><?php echo $row["ten_the_loai"] ?></td>
            <td><?php echo $row["ho_ten"] ?></td>
            <td><?php echo $row["nam_phat_hanh"] ?></td>
            <td><?php echo $row["poster"] ?></td>
            <td><?php echo $row["ten_quoc_gia"] ?></td>
            <td><?php echo $row["so_tap"] ?></td>
            <td><?php echo $row["trailer"] ?></td>
            <td><?php echo $row["mo_ta"] ?></td>
            <td>
                <a class="xoa" href="tong.php?page_layout=capnhatphim&id=<?php echo $row["id"] ?>">Sửa</a>
                <a class="xoa" href="xoaphim.php?id=<?php echo $row["id"] ?>">Xóa</a>
            </td>        
        </tr>
        <?php } ?>
    </table>
</body>
</html>