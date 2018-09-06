<?php

$connect_error		= 		"connecton error";

$mysql_host			=		"localhost";
$mysql_user			=		"root";
$mysql_passsowrd	=		"betselotkasa";
$database_connect = mysql_connect($mysql_host, $mysql_user, $mysql_passsowrd);

if($database_connect)
{
	$db_select = mysql_select_db("a_database",$database_connect);
	
	
}
else
{
echo $connect_error;
}
?>