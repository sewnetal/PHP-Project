<?php
if(isset($_POST['submit'])){
require 'core.php';
require 'db_conect.php';
if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
$user_id = $_SESSION['user_id'];

$firstname		=	$_POST['firstname'];
$lastname		=	$_POST['lastname'];
$email			=	$_POST['email'];
$email2			=	$_POST['email2'];
$password1		=	$_POST['password1'];
$password2		=	$_POST['password2'];	
		if(!empty($firstname)&&!empty($password1)&&!empty($lastname)&&!empty($email)&&!empty($email2)&&!empty($password2)){
			if($email==$email2 ){
				if($password1==$password2){
					$query = "UPDATE custemers SET firstname = '$firstname', lastname = '$lastname' , email = '$email',
					password = '$password1' WHERE custemer_id = '$user_id'";
						if($query_run = mysql_query($query)){
							header("Location: confirm.php");
						}else{
							echo "error";
							}
				}else{
					echo "the password dont much";
					}
				
			}
			else{
				echo "the email address dont much.";
				}
			
		}
		else{
			echo "you must fill all filds";
			}
		
	
}

}
if(isset($_POST['cancel'])){
header('Location: http://localhost/alehusiket/profile/index.php');
}
?>
<form action = "<?php echo $current_file;?>" method = "POST">
<p>Firstname:		</br><input type = "text" 	name ="firstname"	size= "40"		maxlength ="40"></p>
<p>Lastname:		</br><input type = "text" 	name ="lastname"	size= "40"		maxlength ="40"></p>	
<p>Email:			</br><input type = "text" 	name ="email"		size= "40"		maxlength ="40"></p>
<p>Re-enter email:	</br><input type = "text" 	name ="email2"		size= "40"		maxlength ="40"></p>
<p>Password:		</br><input type = "password" 	name ="password1"		size= "40"		maxlength ="40"></p>
<p>Re-enter password:
					</br><input type = "password" 	name ="password2"		size= "40"		maxlength ="40"></p>
<p>					<input type ="submit" 	name ="submit" value ="save changes"> 
					<input type ="submit" 	name ="cancel" value ="cancel" ></p>
</form>