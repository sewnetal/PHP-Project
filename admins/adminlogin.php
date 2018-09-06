<?php
require 'core.php';
require 'db_conect.php';
if(isset($_POST['email'])&&isset($_POST['password']))
{
	$email_add			= $_POST['email'];
	$password			= $_POST['password'];
	
		if(!empty($email_add)&&!empty($password))
		{
		$query 				= "SELECT `admin_id` FROM `admins` WHERE `email` = '$email_add' AND `password` ='$password'";
			if($query_run 		= mysql_query($query))
			{
				$query_num_rows		= mysql_num_rows($query_run);
				
				if($query_num_rows == 0)
					{
					echo 'the username and password dosent much';
					}
					else if($query_num_rows == 1)
					{
						$user_id	= mysql_result($query_run,0,'admin_id');
						$_SESSION['user_id']	= $user_id;
						header('Location: http://localhost/alehusiket/admins/admin_home.php');
						
					}
				
			}
				else
				{
					echo 'please register!';		
					
				}
		}
	else
	{
		echo 'you must supply username and password';
	}
		
		
}


?>
<form action ="<?php echo $current_file;?>" method = "POST">
Email</br><input type ="text" name ="email"></br>
password</br><input type ="password" name="password"></br>
</br><input type ="submit" value ="login">


</form>