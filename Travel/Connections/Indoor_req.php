<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Indoor_req = "localhost";
$database_Indoor_req = "places";
$username_Indoor_req = "root";
$password_Indoor_req = "";
$Indoor_req = mysql_pconnect($hostname_Indoor_req, $username_Indoor_req, $password_Indoor_req) or trigger_error(mysql_error(),E_USER_ERROR); 
?>