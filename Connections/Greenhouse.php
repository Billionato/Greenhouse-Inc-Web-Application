<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Greenhouse = "localhost";
$database_Greenhouse = "greenhouse_web";
$username_Greenhouse = "root";
$password_Greenhouse = "root";
$Greenhouse = mysql_pconnect($hostname_Greenhouse, $username_Greenhouse, $password_Greenhouse) or trigger_error(mysql_error(),E_USER_ERROR); 
?>