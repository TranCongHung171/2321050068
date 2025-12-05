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
    <form action="tong.php?page_layout=themtheloai" method="post">
            <h1> Thêm thể loại </h1>
            <div>
                <p> Tên thể loại </p>
                <input type="text" name="username" placeholder="Tên thể loại">
            </div>           
           
            <div><input type="submit" value="Thêm mới"></div>
    </form>

    <?php
    include ('connect.php');
    if(!empty($_POST['username'])) {

            $u = $_POST['username'];
           
                $sql = "INSERT INTO the_loai (ten_the_loai) 
                        VALUES ('$u')";
            //echo $sql;
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            header('location: tong.php?page_layout=theloai');
    
    } else {
        echo "<p> Nhập lại thông tin </p>";

    }
    ?>
</body>
</html>