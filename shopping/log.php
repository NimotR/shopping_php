<?php

require ('db.php');
session_start();

if (isset($_POST["uname"])) {
    $uname = stripslashes($_REQUEST['uname']);
    //escapes special characters in a string
    $uname = mysqli_real_escape_string($link,$uname);
    $pass = stripslashes($_REQUEST['pass']);
    $pass = mysqli_real_escape_string($link,$pass);

    $data = "SELECT * FROM users WHERE
    username= '$uname' AND password='".md5($pass)."'";
    $result = mysqli_query($link, $data); 
    $rows = mysqli_num_rows($result);
    echo $rows;
    if ($rows==1){
        $_SESSION['username'] = $uname;
        
        header("Location: index.php");
    }else {
        echo "password or username incorrect<br>
        <p>not registered yet go here 
        <a href='regform.html'></a> to registered</p>";
    }
}else {
    header('LOCATE: logform.html');
}
?>