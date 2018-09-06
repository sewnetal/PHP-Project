
<?php
require 'core.php';
require 'db_conect.php';

if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
include 'wellcome_temp.php';

}else{
	include 'logginform.php';
	
	}
?>

