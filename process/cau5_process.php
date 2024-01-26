<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])) {
       
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

       
        $max = $a;
        if ($b > $max) {
            $max = $b; 
        }
        if ($c > $max) {
            $max = $c; 
        }

        
        echo "Giá trị lớn nhất là: $max";
    } else {
        echo "Vui lòng nhập đầy đủ ba số.";
    }
}

