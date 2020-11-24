<?php

#crreate connection to the database
$link = mysqli_connect("localhost", "root", "", "register");

if(!$link) die("failed to connect. Error: " . mysqli_connect_error());
//echo "connection successful";

?>