<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {   
    if (isset($_POST["DoF"])) {      
        $fahrenheit = $_POST["DoF"];    

        if (is_numeric($fahrenheit)) {
            
            $celsius = (5 / 9) * ($fahrenheit - 32);          
            echo "Nhiệt độ tương đương theo độ C là: $celsius °C";
        } else {
            echo "Vui lòng nhập một số.";
        }
    } else {
        echo "Dữ liệu không hợp lệ.";
    }
}

