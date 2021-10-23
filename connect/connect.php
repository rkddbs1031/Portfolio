<?php
    $host = "localhost";
    $user = "yoooon";
    $pass = "Wpgns1324!!";
    $db = "yoooon";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    if( mysqli_connect_errno() ){
        echo "Database Connect Flase";
    }else{
//        echo "Database Connect True";
    }
//연결 확인 됐음!
?>