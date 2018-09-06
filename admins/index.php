
<?php
require 'core.php';
require 'db_conect.php';

if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
	header('Location: http://localhost/alehusiket/admins/admin_home.php');

}else{
	include 'index2.php';
	
	}
?>

