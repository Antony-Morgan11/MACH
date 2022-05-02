<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Outdoor_req_dat = "localhost";
$database_Outdoor_req_dat = "places";
$username_Outdoor_req_dat = "root";
$password_Outdoor_req_dat = "";
$Outdoor_req_dat = mysql_pconnect($hostname_Outdoor_req_dat, $username_Outdoor_req_dat, $password_Outdoor_req_dat) or trigger_error(mysql_error(),E_USER_ERROR); 
?>