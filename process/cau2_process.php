<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["a"]) && isset($_POST["b"])) {   
        $a = $_POST["a"];
        $b = $_POST["b"];     
        if ($a > 0 && $b > 0) {        
            $remainder = $a % $b;
           
            echo "Kết quả của phép chia lấy phần dư của $a cho $b là: $remainder";
        } else {
            echo "Vui lòng nhập hai số nguyên dương.";
        }
    } else {
        echo "Dữ liệu không hợp lệ.";
    }
}
