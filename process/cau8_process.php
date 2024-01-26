<?php
    function performAlgorithm($number) {
        $result = array();
        while ($number != 1) {
            $result[] = $number;
            if ($number % 2 == 0) {
                $number = $number / 2;
            } else {
                $number = $number * 3 + 1;
            }
        }
        $result[] = 1;
        return $result;
    }
   
    if (isset($_POST['submit'])) {

        $number = $_POST['number'];

        $result = performAlgorithm($number);

        echo "Các giá trị của N trong quá trình thuật toán: " . implode(' ', $result);
    }