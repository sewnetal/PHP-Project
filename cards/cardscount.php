
<?php
require 'core.php';
require 'db_conect.php';

if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
$user_id = $_SESSION['user_id'];
	if(isset($_POST['Level1'])){
	$query1		= "SELECT * FROM `cards` WHERE `level1` = '$user_id'";
		if($query1_run = mysql_query($query1)){
			$query_num_rows		= mysql_num_rows($query1_run);
			if($query_num_rows == 0){
					echo 'You do not have cards in this level';
			}
				else{
					echo "You have".$query_num_rows." cards in level1";
			
				}
		
		}
	}
	if(isset($_POST['Level2'])){
	$query1		= "SELECT * FROM `cards` WHERE `level2` = '$user_id'";
		if($query1_run = mysql_query($query1)){
			$query_num_rows		= mysql_num_rows($query1_run);
			if($query_num_rows == 0){
					echo 'You do not have cards in this level';
			}
				else{
					echo "You have".$query_num_rows." cards in level2";
			
				}
		
		}
	}
	if(isset($_POST['Level3'])){
	$query1		= "SELECT * FROM `cards` WHERE `level3` = '$user_id'";
		if($query1_run = mysql_query($query1)){
			$query_num_rows		= mysql_num_rows($query1_run);
			if($query_num_rows == 0){
					echo 'You do not have cards in this level';
			}
				else{
					echo "You have".$query_num_rows." cards in level3";
			
				}
		
		}
	}
	if(isset($_POST['Level4'])){
	$query1		= "SELECT * FROM `cards` WHERE `level4` = '$user_id'";
		if($query1_run = mysql_query($query1)){
			$query_num_rows		= mysql_num_rows($query1_run);
			if($query_num_rows == 0){
					echo 'You do not have cards in this level';
			}
				else{
					echo "You have".$query_num_rows." cards in level4";
			
				}
		
		}
	}
	if(isset($_POST['Level5'])){
	$query1		= "SELECT * FROM `cards` WHERE `level5` = '$user_id'";
		if($query1_run = mysql_query($query1)){
			$query_num_rows		= mysql_num_rows($query1_run);
			if($query_num_rows == 0){
					echo 'You do not have cards in this level';
			}
				else{
					echo "You have".$query_num_rows." cards in level5";
			
				}
		
		}
	}
	if(isset($_POST['Level6'])){
	$query1		= "SELECT * FROM `cards` WHERE `level6` = '$user_id'";
		if($query1_run = mysql_query($query1)){
			$query_num_rows		= mysql_num_rows($query1_run);
			if($query_num_rows == 0){
					echo 'You do not have cards in this level';
			}
				else{
					echo "You have".$query_num_rows." cards in level6";
			
				}
		
		}
	}
include_once("cards_templet.php"); 
}
else{
	header('Location: logincheck.php');
	 }
						

?>
