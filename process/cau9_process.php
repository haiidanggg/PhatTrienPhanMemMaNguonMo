<?php

    function TimSoThieu($N, $numbers) {
       
        $So = range(1, $N); 
        $ThemSo = explode(" ", $numbers);
        $SoConThieu = array_diff($So, $ThemSo);

        return reset($SoConThieu);
    }
    if (isset($_POST['submit'])) {
      
        $N = $_POST['N'];
        $numbers = $_POST['numbers'];
        $SoConThieu = TimSoThieu($N, $numbers);

        echo "Số còn thiếu là: $SoConThieu";
    }