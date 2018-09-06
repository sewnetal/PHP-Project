<div id="logout"><a href="logout.php">Logout</a></div>
<p>Wellcome</p>
<?php
require 'core.php';
require 'db_conect.php';

if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
$user_id = $_SESSION['user_id'];
	$query1		= "SELECT `firstname`FROM `custemers`WHERE `custemer_id` = '$user_id'";
		if($query1_run = mysql_query($query1)){
			$firstname1	= mysql_result($query1_run,0,'firstname');
			echo $firstname1;						
		}
}
						

?>
