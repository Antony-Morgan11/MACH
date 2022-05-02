<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_User_Information1 = "localhost";
$database_User_Information1 = "user_registration";
$username_User_Information1 = "root";
$password_User_Information1 = "";
$User_Information1 = mysql_pconnect($hostname_User_Information1, $username_User_Information1, $password_User_Information1) or trigger_error(mysql_error(),E_USER_ERROR); 
?>