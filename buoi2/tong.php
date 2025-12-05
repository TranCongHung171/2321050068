<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang admin</title>
    <style>
        nav {
            margin-top: 0px;
            background-color: #f1f0f0ff;
            jusstify-content: space-between;
            display: flex;           
        }
        nav ul {
            display: flex;
            list-style: none;
            margin-left: 30px;          
        }
        nav ul li {
            float: left;
        }
        nav ul li a {
            margin: 0 20px;
            text-decoration: none;
            color: blue;
            font-size: 22px;
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
    <!-- <h1>Trang chủ</h1> -->
    <?php
        //echo "Chào mừng " . $_SESSION['username'] . " đến với trang chủ.";
    ?>
    <header>
        <nav>
            <ul class="">
                <li class = ""><a class = "" href="tong.php?page_layout=trangchu">Trang chủ</a></li> <!--pagelayout để giữ tiêu đề trang k đổi-->
                <li class = ""><a class = "" href="tong.php?page_layout=phim">Phim</a></li>
                <li class = ""><a class = "" href="tong.php?page_layout=theloai">Thể loại</a></li>
                <li class = ""><a class = "" href="tong.php?page_layout=quocgia">Quốc gia</a></li>
                <li class = ""><a class = "" href="tong.php?page_layout=nguoidung">Người dùng</a></li>
            </ul>
            <ul style = "margin-left: 900px;">
                <li><?php echo "Xin chào" . $_SESSION['username']; ?></li>
                <!-- <li class = ""><a class = "" href="tong.php?page_layout=dangxuat">Đăng xuất</a></li></ul> -->
                <li class = ""><a class = "" href="login.php">Đăng xuất</a></li>
            </ul>
        </nav>

        <?php
        if (isset($_GET['page_layout'])) {
            //echo "Xin chào " . $_SESSION['username'];
            switch ($_GET['page_layout']) {
                case 'trangchu': 
                    include 'trangchu/trangchu.php';
                    break;
                case 'quocgia': 
                    include 'quocgia/quocgia.php';
                    break;
                case 'phim': 
                    include 'phim/phim.php';
                    break;
                case 'theloai': 
                    include 'theloai/theloai.php';
                    break;
                case 'nguoidung': 
                    include 'nguoidung/nguoidung.php';
                    break;    
                case 'dangxuat':
                    include 'login.php';
                    session_unset();
                    session_destroy();
                    
                    header("Location: login.php");
                    break;
                case 'themnguoidung':
                    include 'nguoidung/themnguoidung.php';
                    break;
                case 'capnhatnguoidung':
                    include 'nguoidung/capnhatnguoidung.php';
                    break;
                case 'themphim':
                    include 'phim/themphim.php';
                    break;
                case 'capnhatphim':
                    include 'phim/capnhatphim.php';
                    break; 
                case 'themtheloai':
                    include 'theloai/themtheloai.php';  
                    break;
                case 'capnhattheloai':
                    include 'theloai/capnhattheloai.php';  
                    break;
                case 'themquocgia':
                    include 'quocgia/themquocgia.php';
                    break;
                case 'capnhatquocgia':
                    include 'quocgia/capnhatquocgia.php';
                    break;
                       
            }
        } else {
            include 'trangchu/trangchu.php';
        }
        ?>
    </header>
</body>
</html>