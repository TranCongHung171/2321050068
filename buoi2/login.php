<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buoi 2 php</title>
    <style>
        .warning {
            color: red;
        }
    </style>
</head>
<body>
    
    <form action="login.php" method="post">
            <h1> Đăng nhập </h1>
            <div><input type="text" name="username" placeholder="Tên đăng nhập"></div>
            <div><input type="password" name="password" placeholder="Mật khẩu"></div>
            <div><input type="submit" value="Đăng nhập"></div>
    </form>
    <?php
    include ('connect.php');
    if(isset($_POST['username']) && isset($_POST['password']))  {

    
        $tenDangNhap = $_POST['username'];
        //echo "Tên đăng nhập của bạn là: " . $tenDangNhap;
        $matKhau = $_POST['password'];
        //echo "<br> Mật khẩu của bạn là: " . $matKhau;

        //nếu tên đăng nhập = admin
        // mật khẩu 123 thì cho phép ng dùng  vào trang chủ
        
        $sql = "SELECT * FROM nguoi_dung WHERE ten_dang_nhap = '$tenDangNhap' AND mat_khau = '$matKhau'";
        //echo $sql;
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            // đăng nhập thành công
            session_start();
            $_SESSION['username'] = $tenDangNhap;
            header("Location: tong.php");
        } else {
            echo '<p class="warning"> Đăng nhập thất bại</p>';  
        }


        // if($tenDangNhap == "admin" && $matKhau == "123") {
        //     session_start();
        //     $_SESSION['username'] = $tenDangNhap;
        //     header("Location: trangchu.php");
        //     //echo "<br> Đăng nhập thành công. <a href='trangchu.php'>Vào trang chủ</a>";
        // } else {
        //     echo '<p class="warning"> Đăng nhập thất bại</p>';
        // }
    }

    ?>
    
</body>
</html>