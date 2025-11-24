<?php
    //session: lưu ở server
    #thông tin đăng nhập, giỏ hàng, ... tt qtr cần bảo mật
    $cookieName = "user";
    $cookieValue = "CongHung";
    //86400 = 30 ngay
    setcookie($cookieName, $cookieValue, time() + (86400), "/");
    if(isset($_COOKIE[$cookieName])) {
        echo "cookie đã tồn tại " . $cookieName . " da duoc tao. Gia tri: " . $_COOKIE[$cookieName];
    } else {
        echo "Cookie chưa được tạo.";
    }


    //cookie: lưu ở client: máy chủ ng dùng
    # lưu ở phía ng dùng
    # dùng cho những thông tin k quan trọng
    session_start();
    $_SESSION['name'] = "CongHung 123";
    echo "<br> Session da duoc tao. Gia tri: " . $_SESSION['name'];
?>