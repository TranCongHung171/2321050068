<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            
        }
        div{
            color: black;
        }
    </style>
</head>
<body>
    <form action="tong.php?page_layout=themnguoidung" method="post">
            <h1> Thêm ng dùng </h1>
            <div>
                <p> Tên đăng nhập </p>
                <input type="text" name="username" placeholder="Tên đăng nhập">
            </div>
            <div>
                <p> Mật khẩu </p>
                <input type="password" name="password" placeholder="Mật khẩu"></div>
            <div>
                <p> họ tên </p>
                <input type="text" name="ho-ten" placeholder="họ tên">
            </div>
            <div>
                <p> email </p>
                <input type="email" name="email" placeholder="email">
            </div>
            <div>
                <p> sdt </p>
                <input type="text" name="sdt" placeholder="SDT">
            </div>
            <div>
                <p> ngày sinh </p>
                <input type="date" name="ngay-sinh" placeholder="ns ">
            </div>
            <div>
                <p> vai trò </p>
                <select name ="vai-tro">
                    <option value="1">Admin</option>
                    <option value="2">đa dien</option>
                    <option value="3">dienx vien</option>
                    <option>ng dùng</option>
                </select>
            </div>
           
            <div><input type="submit" value="Thêm mới"></div>
    </form>

    <?php
    include ('connect.php');
    if(!empty($_POST['username']) &&
       !empty($_POST['password']) &&
       !empty($_POST['ho-ten']) &&
       !empty($_POST['email']) &&
       !empty($_POST['sdt']) &&
       !empty($_POST['email']) &&
       !empty($_POST['ngay-sinh']) &&
       !empty($_POST['vai-tro'])) {

            $tenDangNhap = $_POST['username'];
            $matKhau = $_POST['password'];
            $hoTen = $_POST['ho-ten'];
            $email = $_POST['email'];
            $sdt = $_POST['sdt'];
            $ngaySinh = $_POST['ngay-sinh'];
            $vaiTro = $_POST['vai-tro'];
            $sql = "INSERT INTO nguoi_dung (ten_dang_nhap, mat_khau, ho_ten, email, sdt, ngay_sinh, vai_tro_id) 
                    VALUES ('$tenDangNhap', '$matKhau', '$hoTen', '$email', '$sdt', '$ngaySinh', '$vaiTro')";
            echo $sql;
            // mysqli_query($conn, $sql);
            // mysqli_close($conn);
            // header('location: tong.php?page_layout=nguoidung');
    
    } else {
        echo "<p> Nhập lại thông tin </p>";

    }
    ?>
</body>
</html>