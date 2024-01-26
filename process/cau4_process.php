<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {   
    if (isset($_POST["a"]) && isset($_POST["b"])) {
        
        $a = $_POST["a"];
        $b = $_POST["b"];

        if ($a != 0) {
         
            $x = -$b / $a;
            echo "Nghiệm của phương trình $a*x + $b = 0 là: x = $x";
        } else {

            if ($b == 0) {
                echo "Phương trình có vô số nghiệm.";
            } else {
                echo "Phương trình vô nghiệm.";
            }
        }
    } else {
        echo "Vui lòng nhập đầy đủ hệ số.";
    }
}

