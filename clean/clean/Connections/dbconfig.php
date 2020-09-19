<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$link = mysqli_connect('localhost', 'root', '', 'cleaningdb');
$hostname_dbconnection = "localhost";
$database_dbconnection = "cleaningdb";
$username_dbconnection = "root";
$password_dbconnection = "";
$dbconnection = mysqli_connect($hostname_dbconnection, $username_dbconnection, $password_dbconnection) or trigger_error(mysqli_error(),E_USER_ERROR); 
?>