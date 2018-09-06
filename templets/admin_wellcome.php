<div id="logout"><a href="logout.php">Logout</a></div>
<p>Wellcome</p>
<?php
require 'core.php';
require 'db_conect.php';

if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
$user_id = $_SESSION['user_id'];
	$query1		= "SELECT `firstname`FROM `admins`WHERE `admin_id` = '$user_id'";
		if($query1_run = mysql_query($query1)){
			$firstname	= mysql_result($query1_run,0,'firstname');
			echo $firstname;						
		}
}
else{
header('Location: http://localhost/alehusiket/admins/index.php');
}

?>
