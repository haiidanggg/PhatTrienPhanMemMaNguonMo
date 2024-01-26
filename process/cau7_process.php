<?php
   
    function convertTime($seconds) {
        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds % 3600) / 60);
        $seconds = $seconds % 60;
        return array($hours, $minutes, $seconds);
    }
   
    if (isset($_POST['submit'])) {       
        $seconds = $_POST['giay'];
       
        list($hours, $minutes, $seconds) = convertTime($seconds);   
        echo "Thời gian là: $hours giờ, $minutes phút, $seconds giây";
    }