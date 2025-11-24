<h1>Đây là file php</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1</title>
</head>
<body>
    <?php
    // 1. cú pháp in ra màn hình
    echo"Hello World! <br>";

    echo"PHP <br>";
    // 2. Biến 
    // Cú pháp : $ + tên biến = giá trị của biến\
    $ten ="Bá Đức";
    $tuoi = 20;
    echo "Xin chào" . $ten . "" . $tuoi . "" ."tuổi <br>";
    // 3. Hằng 
    define("soPi","3.14");
    echo soPi . "<br>";
    
    // 4. Phân biệt
    echo '$ten' . "<br>";
    echo "$ten" . "<br>";

    // 5. Chuỗi
    #5.1 Kiểm tra độ dài của chuỗi
    echo strlen($ten) . "<br>";
    #5.2 Đếm số từ
    echo str_word_count($ten) . "<br>";
    #5.3 Tìm kiếm ký tự trong chuỗi
    echo strpos($ten,"A") . "<br>";
    #5.4 Thay thế kí tự trong chuỗi
    echo str_replace("Anh","An",$ten) . "<br>";

    // 6. Toán tử
    $soThuNhat = 10;
    $soThuHai = 5;
    // + - * / %
    # += -= *= /= %=
    echo $soThuNhat + $soThuHai . "<br>";
    // 7. Câu điều kiện
    $tong = $soThuNhat * $soThuHai;
    if($tong<15){
        echo "tổng là " . $tong . "nhỏ hơn 15"; 
    }
    elseif ($tong ==15) {
        echo "tổng là" . $tong;
    }
    else {
        echo "tổng là " . $tong . "lớn hơn 15";
    }

    ?>
</body>
</html>