<?php

    if (isset($_POST['submit'])) {

        $number = $_POST['number'];

        $digit1 = $number % 10;
        $digit2 = ($number - $digit1) / 10;
        $sum = $digit1 + $digit2;

        echo "Tổng các chữ số của số $number là: $sum";
    }
 