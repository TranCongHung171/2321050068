<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 php</title>
</head>
<body>
    <?php
    //1. In ra màn hình
    echo "Hello World <br>";

    echo "Hi";

    //2. Biến: 
    // cú pháp: $ + tên biến = giá trị biến;
    $ten = "Trần Công Hùng";
    $tuoi = 20;

    echo $ten . "<br>"; // nối chuỗi
    echo $ten . " " . $tuoi . "tuổi <br>";

    //3. Hằng
    define("soPi", "3.14");
    echo soPi . "<br>";

    //4. phân biệt "", ''
    echo '$ten <br>'; // in đúng ký tự trong nháy đơn
    echo "$ten <br>"; // in giá trị biến

    //5. chuỗi
    #5.1 kiểm tra độ dài chuỗi
    echo strlen($ten) . "<br>";
    #5.2 Đếm số từ
    echo str_word_count($ten) . "<br>";
    #5.3 Tìm kiếm ký tự trong chuỗi
    echo strpos($ten, "T") . "<br>"; // trả về vị trí ký tự đầu tiên tìm thấy
    #5.4 Thay thế ký tự trong chuỗi
    echo str_replace("Hùng", "Huy", $ten) . "<br>";
    //6. Toán tử
    $soThuNhat = 10;
    $soThuHai = 5;
    # +-*/
    echo $soThuNhat + $soThuHai . "<br>";
    echo $soThuNhat - $soThuHai . "<br>";   
    echo $soThuNhat * $soThuHai . "<br>";
    echo $soThuNhat / $soThuHai . "<br>";
    # += -= *= /= %=
    //echo $soThuNhat %= $soThuHai . "<br>"; 
    # ss < > <= >= == != ===
    echo ($soThuNhat != $soThuHai) . "<br>"; // true = 1, false = null
    //7. Câu điều kiện
    // if("dkien") {
    //logic
    // }
    //elseif("dkien") {
    //logic
    //}
    //else {  
    //logic
    //}
    // kiểm tra tổng số 1 và 2( nếu < 15 thì in ra nhỏ hơn 15, nếu =15 in ra =15, còn lại in ra lớn hơn 15)
    echo $soThuNhat + $soThuHai;
    if($soThuNhat + $soThuHai < 15) {
        echo "nhỏ hơn 15 <br>";
    } elseif($soThuNhat + $soThuHai == 15) {
        echo "tổng = 15 <br>";
    } else {
        echo "lớn hơn 15 <br>";
    }
    //8. switch case
    $color = "red";
    switch($color) {
        case "red":
            echo "is red <br>";
            break;
        case "blue":
            echo "is blue <br>";
            break;
        default:
            echo "no color <br>";
            break;
    }
    //9. for
    for($i = 1; $i <= 100; $i++) {
        echo $i . "<br>";
    }
    //10. mảng
    $mang = ["Anh", "Tú", "Hùng", "Huy"];
    //đếm phần tử
    echo count($mang) . "<br>";
    echo $mang[1] . "<br>";
    print_r($mang) . "<br>";
    $mang[0] = "Hai Anh";
    print_r($mang) . "<br>";
    $mang[] = "Tam";
    print_r($mang) . "<br>";
    #xóa
    unset($mang[4]);
    print_r($mang) . "<br>";

    #sxep mảng
    $mang = ["C", "B", "D", "A"];
    print_r($mang) . "<br>";
    sort($mang); //sx tăng dần
    print_r($mang) . "<br>";
    rsort($mang); //sx giảm dần
    print_r($mang) . "<br>";

    #string to array
    $ten = "Dung, Kien, Hao, Minh, Phuong, Nam"; // học thêm

    //11 Kiểm tra xem biến có tồntại không: isset(), empty()
    $bienA = "hello";
    isset($bienA) . "<br>"; // true
    isset($bienB) . "<br>"; // false 
    if(isset($bienB)) {
        echo "biến này có tồn tại <br>";
    } else {
        echo "biến này không tồn tại <br>";
    }

    //check empty
    $check = "";
    if(empty($check)) {
        echo "empty <br>";
    } else {
        echo "no empty <br>";
    }
    //12. Hàm
    # ko tham số
    function xinChao () {
        return "Hello";
    }
    echo xinChao() . "<br>";
    
    #có tham số
    function xinChao2($ten) {   
        return "Hello " . $ten;
    }
    echo xinChao2("Hùng") . "<br>";

    ?>
</body>
</html>