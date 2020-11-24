<?php
    $uname = stripslashes($_REQUEST["uname"]);
    $uname = mysqli_real_escape_string($link, $uname);
    $email = stripslashes($_REQUEST["email"]);
    $email = mysqli_real_escape_string($link, $email);
    $pass = stripslashes($_REQUEST["pass"]);
    $pass = mysqli_real_escape_string($link, $pass);
    $trn_date = date("Y-m-d H:i:s");
?>