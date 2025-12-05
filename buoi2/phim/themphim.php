 <?php
    include ('connect.php');
    if(!empty($_POST['username']) &&
       !empty($_POST['the-loai']) &&
       !empty($_POST['dao-dien']) &&
       !empty($_POST['namphathanh']) &&
       !empty($_POST['poster']) &&
       !empty($_POST['quoc-gia']) &&
       !empty($_POST['sotap']) &&
       !empty($_POST['trailer']) &&
       !empty($_POST['mota'])) {

            $u = $_POST['username'];
            $tl = $_POST['the-loai'];
            $d = $_POST['dao-dien'];
            $n = $_POST['namphathanh'];
            $p = $_POST['poster'];
            $qg = $_POST['quoc-gia'];
            $s = $_POST['sotap'];
            $t = $_POST['trailer'];
            $m = $_POST['mota'];
            $sql = "INSERT INTO phim (ten_phim, the_loai_id, dao_dien_id, nam_phat_hanh, poster, quoc_gia_id, so_tap, trailer, mo_ta) 
                    VALUES ('$u', $tl, '$d', '$n', '$p', '$qg', '$s', '$t', '$m')";
            //echo $sql;
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            header('location: tong.php?page_layout=phim');
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
        form{
            
        }
        div{
            color: black;
        }
    </style>
</head>
<body>
    <h1> Thêm phim </h1>
    <form action="tong.php?page_layout=themphim" method="post">
            
            <div>
                <p> Tên phim </p>
                <input type="text" name="username" placeholder="Tên phim">
            </div>
            <div>
                <p> Thể loại </p>
                <select name="the-loai">
                    <?php
                        include ('connect.php');
                        $sql = "SELECT * FROM the_loai";
                        $result = mysqli_query($conn, $sql);
                        while($tl = mysqli_fetch_assoc($result)) {
                    ?>
                        <option value="<?php echo $tl['id'] ?>"><?php echo $tl['ten_the_loai'] ?></option>
                    <?php
                    }
                    ?>
                </select>
                <!-- <input type="text" name="daodien" placeholder="ghi id dd"> -->
            </div>
            <div>
                <p> Đạo diễn </p>
                <select name="dao-dien">
                    <?php
                        include ('connect.php');
                        $sql = "SELECT * FROM nguoi_dung WHERE vai_tro_id = 2";
                        $result = mysqli_query($conn, $sql);
                        while($dd = mysqli_fetch_assoc($result)) {
                    ?>
                        <option value="<?php echo $dd['id'] ?>"><?php echo $dd['ho_ten'] ?></option>
                    <?php
                    }
                    ?>
                </select>
                <!-- <input type="text" name="daodien" placeholder="ghi id dd"> -->
            </div> 
            <div>
                <p> Năm phát hành </p>
                <input type="number" name="namphathanh" placeholder="Năm phát hành">
            </div>
            <div>
                <p> Poster </p>
                <input type="text" name="poster" placeholder="Tên poster">
            </div>
            <div>
                <p> Quốc gia </p>
                <select name="quoc-gia">
                    <?php
                        include ('connect.php');
                        $sql = "SELECT * FROM quoc_gia";
                        $result = mysqli_query($conn, $sql);
                        while($qg = mysqli_fetch_assoc($result)) {
                    ?>
                        <option value="<?php echo $qg['id'] ?>"><?php echo $qg['ten_quoc_gia'] ?></option>
                    <?php
                    }
                    ?>
                </select>
                <!-- <input type="text" name="quocgia" placeholder="ghi id quốc gia"> -->
            </div>
            <div>
                <p> Số tập </p>
                <input type="number" name="sotap" placeholder="Số tập">
            </div>
            <div>
                <p> Trailer </p>
                <input type="text" name="trailer" placeholder="Tên trailer">
            </div>
            <div>
                <p>Mô tả </p>
                <textarea name="mota" placeholder="Mô tả phim"></textarea>
            </div>
           
            <div><input type="submit" value="Thêm mới"></div>
    </form>

   
</body>
</html>