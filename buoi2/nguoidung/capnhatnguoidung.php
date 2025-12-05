<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        div{
            color: black;
        }
    </style>
</head>
<body>
    <?php
    include ('connect.php');
    $id=$_GET['id'];
    $sql = "SELECT * FROM nguoi_dung WHERE id= $id";
    $result = mysqli_query($conn, $sql);
    $nguoiDung = mysqli_fetch_assoc($result);
    ?>
    <form action="tong.php?page_layout=capnhatnguoidung&id=<?php echo $id ?>" method="post">
            <h1> Thêm ng dùng </h1>
            <div>
                <p> Tên đăng nhập </p>
                <input type="text" name="username" placeholder="Tên đăng nhập" value="<?php echo $nguoiDung['ten_dang_nhap'] ?>">
            </div>
            <div>
                <p> Mật khẩu </p>
                <input type="password" name="password" placeholder="Mật khẩu" value="<?php echo $nguoiDung['mat_khau'] ?>"></div>
            <div>
                <p> họ tên </p>
                <input type="text" name="ho-ten" placeholder="họ tên" value="<?php echo $nguoiDung['ho_ten'] ?>">
            </div>
            <div>
                <p> email </p>
                <input type="email" name="email" placeholder="email" value="<?php echo $nguoiDung['email'] ?>">
            </div>
            <div>
                <p> sdt </p>
                <input type="text" name="sdt" placeholder="SDT" value="<?php echo $nguoiDung['sdt'] ?>">
            </div>
            <div>
                <p> ngày sinh </p>
                <input type="date" name="ngay-sinh" placeholder="ns " value="<?php echo $nguoiDung['ngay_sinh'] ?>">
            </div>
            <div>
                <p> vai trò </p>
                <select name ="vai-tro">
                    <option value="1" <?php echo ($nguoiDung['vai_tro_id'] == 1) ? 'selected' : ""; ?>>Admin</option>
                    <option value="2" <?php echo ($nguoiDung['vai_tro_id'] == 2) ? 'selected' : ""; ?>>đa dien</option>
                    <option value="3" <?php echo ($nguoiDung['vai_tro_id'] == 3) ? 'selected' : ""; ?>>dienx vien</option>
                    <option value="4" <?php echo ($nguoiDung['vai_tro_id'] == 4) ? 'selected' : ""; ?>>ng dùng</option>
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
            $id = $_GET['id'];
            $tenDangNhap = $_POST['username'];
            $matKhau = $_POST['password'];
            $hoTen = $_POST['ho-ten'];
            $email = $_POST['email'];
            $sdt = $_POST['sdt'];
            $ngaySinh = $_POST['ngay-sinh'];
            $vaiTro = $_POST['vai-tro'];
            $sql = "UPDATE nguoi_dung SET ten_dang_nhap='$tenDangNhap', mat_khau='$matKhau', ho_ten='$hoTen', email='$email', sdt='$sdt', ngay_sinh='$ngaySinh', vai_tro_id='$vaiTro' WHERE id= $id";
            //echo $sql;
             mysqli_query($conn, $sql);
             mysqli_close($conn);
             header('location: tong.php?page_layout=nguoidung');
    
    } else {
        echo "<p> Nhập lại thông tin </p>";

    }
    ?>
</body>
</html>