<?php
    if( !isset($_SESSION['studyMemberID']) ){
        Header("Location:../login/login.html");  
    }
?>