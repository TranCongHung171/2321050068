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
    $sql = "SELECT * FROM the_loai WHERE id= $id";
    $result = mysqli_query($conn, $sql);
    $t = mysqli_fetch_assoc($result);
    ?>
    <form action="tong.php?page_layout=capnhattheloai&id=<?php echo $id ?>" method="post">
            <h1> Thêm thể loại </h1>
            <div>
                <p> Tên thể loại </p>
                <input type="text" name="username" placeholder="Tên thể loại" value="<?php echo $t['ten_the_loai'] ?>">
            </div>           
           
            <div><input type="submit" value="Thêm mới"></div>
    </form>

    <?php
    include ('connect.php');
    if(!empty($_POST['username'])) {

            $u = $_POST['username'];
           
                $sql = "UPDATE the_loai SET ten_the_loai = '$u' WHERE id = $id";
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