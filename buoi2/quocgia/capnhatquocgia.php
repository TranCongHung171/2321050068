 <?php
    include ('connect.php');
    if(!empty($_POST['ten-quoc-gia'])) {
            $id = $_GET['id'];
            $tenQuocGia = $_POST['ten-quoc-gia'];
           
            $sql = "UPDATE quoc_gia SET ten_quoc_gia = '$tenQuocGia' WHERE id= '$id'";
            //echo $sql;
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            header('location: tong.php?page_layout=quocgia');
    
    } else {
        echo "<p> Nhập lại thông tin </p>";

    }
    ?>  

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
    $tenQuocGia = $_GET['tenQuocGia'];
    $id = $_GET['id'];
    ?>
    <form action="tong.php?page_layout=capnhatquocgia&id=<?php echo $id ?>" method="post">
            <h1> Thêm quốc gia </h1>
            <div>
                <p> Tên quốc gia </p>
                <input type="text" name="ten-quoc-gia" placeholder="Tên quốc gia" value="<?php echo $tenQuocGia ?>">
            </div>           
           
            <div><input type="submit" value="Cập nhật"></div>
    </form>
    

   
</body>
</html>