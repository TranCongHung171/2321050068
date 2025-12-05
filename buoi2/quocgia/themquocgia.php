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
    <form action="tong.php?page_layout=themquocgia" method="post">
            <h1> Thêm quốc gia </h1>
            <div>
                <p> Tên quốc gia </p>
                <input type="text" name="username" placeholder="Tên quốc gia">
            </div>           
           
            <div><input type="submit" value="Thêm mới"></div>
    </form>

    <?php
    include ('connect.php');
    if(!empty($_POST['username'])) {

            $u = $_POST['username'];
           
            $sql = "INSERT INTO quoc_gia (ten_quoc_gia) VALUES ('$u')";
            //  có auto_increment thì k cần insert into id 
            //echo $sql;
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            header('location: tong.php?page_layout=quocgia');
    
    } else {
        echo "<p> Nhập lại thông tin </p>";

    }
    ?>
</body>
</html>