<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .f{
            border: 3px solid #9145e8ff;
            width: 400px;
            padding: 10px;
            margin: auto;
            background-color: #988ee8ff;
            border-radius: 10px;
            margin-top: 20px;
            
        }
        h1{
            text-align: center;
            color: white;
        }
        p{
            color: white;
            font-size:20px;
        }
        div{
            color: black;
            
        }
        .khoi{
            margin-bottom: 15px;
            border-radius: 5px; 
            background-color: #ffffff;
            

        }
        input{
            width: 70%;
            height: 20px;
            border-radius: 5px; 
            border: none;
        }
        .w{
            color: red;
            text-align: center;
            margin-top: -40px;
            margin-left: 230px;
        }
        .s{
            width: 100px;
            height: 30px;
            border-radius: 5px; 
            border: none;
            background-color: #228112ff;
            color: white;
            font-weight: bold;
            
        }
        .s:hover{
            background-color: #e2d6f7ff;
            cursor: pointer;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="f">
        <form action="tong.php?page_layout=themnguoidung" method="post">
                <h1> Thêm người dùng </h1>
                <div >
                    <p> Tên đăng nhập: </p>
                    <input class="khoi" type="text" name="username" placeholder="Tên đăng nhập">
                </div>
                <div >
                    <p> Mật khẩu: </p>
                    <input class="khoi" type="password" name="password" placeholder="Mật khẩu"></div>
                <div >
                    <p> Họ tên: </p>
                    <input class="khoi" type="text" name="ho-ten" placeholder="họ tên">
                </div>
                <div >
                    <p> Email: </p>
                    <input class="khoi" type="email" name="email" placeholder="email">
                </div>
                <div >
                    <p> Sdt: </p>
                    <input class="khoi" type="text" name="sdt" placeholder="SDT">
                </div>
                <div >
                    <p> Ngày sinh: </p>
                    <input class="khoi" type="date" name="ngay-sinh" placeholder="ns ">
                </div>
                <div >
                    <p> Vai trò: </p>
                    <select class="khoi" name ="vai-tro">
                        <option value="1">Admin</option>
                        <option value="2">đa dien</option>
                        <option value="3">dienx vien</option>
                        <option value="4">ng dùng</option>
                    </select>
                </div>
               
                <div ><input class="s" type="submit" value="Thêm mới"></div>
        </form>
    </div>

    <?php
    include ('connect.php');
    if(!empty($_POST['username']) &&
       !empty($_POST['password']) &&
       !empty($_POST['ho-ten']) &&
       !empty($_POST['email']) &&
       !empty($_POST['sdt']) &&
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
            //echo $sql;
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            header('location: tong.php?page_layout=nguoidung');
    
    } else {
        echo "<h3 class='w'> Nhập đủ thông tin! </h3>";

    }
    ?>
</body>
</html>