<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang admin</title>
    <style>
        nav {
            background-color: #f1f0f0ff;
            overflow: hidden;
            jusstify-content: space-between;
            display: flex;
        }

        nav ul {
            display: flex;
            list-style: none;


        }

        nav ul li {
            float: left;
        }

        nav ul li a {
            margin: 0 10px;
            text-decoration: none;
        }

        
    </style>
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header("Location: login.php");
    }
    ?>
    <h1>Trang chủ</h1>
    <?php
        echo "Chào mừng " . $_SESSION['username'] . " đến với trang chủ.";
    ?>
    <header>
        <nav>
            <ul>
                <li class = ""><a class = "" href="index.php?page_layout=trangchu0">Trang chủ</a></li>
                <li class = ""><a class = "" href="index.php?page_layout=phim">Phim</a></li>
                <li class = ""><a class = "" href="index.php?page_layout=theloai">Thể loại</a></li>
                <li class = ""><a class = "" href="index.php?page_layout=quocgia">Quốc gia</a></li>
                <li class = ""><a class = "" href="index.php?page_layout=nguoidung">Người dùng</a></li>
            </ul>
            <ul class="">
                <li><?php echo "Xin chào" . $_SESSION['username']; ?></li>
                <li class = ""><a class = "" href="index.php?page_layout=dangxuat">Đăng xuất</a></li></ul>
        </nav>

        <?php
        if (isset($_GET['page_layout'])) {
            //echo "Xin chào " . $_SESSION['username'];
            switch ($_GET['page_layout']) {
                case 'trangchu0': 
                    include 'trangchu0.php';
                    break;
                case 'quocgia': 
                    include 'quocgia.php';
                    break;
                case 'phim': 
                    include 'phim.php';
                    break;
                case 'theloai': 
                    include 'theloai.php';
                    break;
                case 'nguoidung': 
                    include 'nguoidung.php';
                    break;    
                case 'dangxuat':
                    break;
            }
        }
        ?>
    </header>
</body>
</html>