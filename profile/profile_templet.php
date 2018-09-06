<table>
<tr align="left">
<td width="62" valign="baseline">
	
  <h4>Firstname:</h4>
  </br>
   </br>
  <h4>Lastname:</h4>
  </br>
   </br>
  <h4>Email:</h4>  
  </br>
   </br>
  <h4>password:</h4>  </br>
  </td>
<td width="62" align="center" valign="top">
<?php
require 'core.php';
require 'db_conect.php';

if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
$user_id = $_SESSION['user_id'];
	$query = "SELECT `firstname`,`lastname`,`email`,`password` FROM `custemers` WHERE `custemer_id` = '$user_id'";
	if($query_run = mysql_query($query)){
			$query_num_rows		= mysql_num_rows($query_run);
			if($query_num_rows == 1){
				while($fech =  mysql_fetch_array($query_run)){
					$firstname = $fech["firstname"];
					$lastname = $fech["lastname"];
					$email = $fech["email"];
					$password = $fech["password"];
					}	
					echo "<p>".$firstname."</p>"."</br>"."</br>";
					echo $lastname."</br>"."</br>"."</br>";
					echo $email."</br>"."</br>"."</br>";
					echo "*********"."</br>"."</br>"."</br>";
					 
			}
				else{
					
			
				}
		
		}
	}
else{
	header('Location: logincheck.php'); 
	 }
			
	 
						

?>
<form action="editprofile.php" method="post">
<input type="submit" value="Edit profile" />
</form>
</td>
</tr>
</table>
