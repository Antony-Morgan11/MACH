<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Web_rest = "localhost";
$database_Web_rest = "indoor";
$username_Web_rest = "root";
$password_Web_rest = "";
$Web_rest = mysql_pconnect($hostname_Web_rest, $username_Web_rest, $password_Web_rest) or trigger_error(mysql_error(),E_USER_ERROR); 
?>