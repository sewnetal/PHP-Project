<?php
if(isset($_POST['submit'])){
$uniqid = array();
while(count($uniqid) < 5){
   $cus_id = rand(1,1000000);
   if(!in_array($cus_id,$uniqid)){
      $uniqid[] = $cus_id;
   }
}
$firstname		=	$_POST['firstname'];
$lastname		=	$_POST['lastname'];
$email			=	$_POST['email'];
$email2			=	$_POST['email2'];
$card_number	=	$_POST['card_number'];
$password		=	(uniqid(rand(1,1000)));
	if(!empty($firstname)&&!empty($card_number)&&!empty($lastname)&&!empty($email)&&!empty($email2)){
		if($email == $email2){
			$query 	= "SELECT `level1`,`level2`,`level3`,`level4`,`level5`,`level6` FROM `cards` WHERE `card_number` = '$card_number'";
			if($query_run = mysql_query($query)){
				$query_num_rows = mysql_num_rows($query_run);
				if($query_num_rows == 1){
					while($fech =  mysql_fetch_array($query_run)){
					$level1 = $fech["level1"];
					$level2 = $fech["level2"];
					$level3 = $fech["level3"];
					$level4 = $fech["level4"];
					$level5 = $fech["level5"];
					$level6 = $fech["level6"];
					}
					
					$query4		= @"INSERT INTO `custemers` VALUES ($cus_id,'$firstname','$lastname','$email','$password')";
					$query_run	= mysql_query($query4);
					$query5			="SELECT `firstname`,`lastname` FROM `custemers` WHERE `custemer_id` = '$level1'";
						if($query_run5		= mysql_query($query5)){
							$query_num_rows5	= mysql_num_rows($query_run5);
								if($query_num_rows5 == 1){
									while($fech1 =  mysql_fetch_array($query_run5)){
										$first_name = $fech1["firstname"];
										$last_name 	= $fech1["lastname"];
									}
									$query6		= "SELECT `num_of_cards` FROM `winer` WHERE `custemer_id` = '$level1'";
									$query_run6 = mysql_query($query6);
									$query_num_rows6	= mysql_num_rows($query_run6);
										if($query_num_rows6 == 1){
											$count 		= mysql_result($query_run6,0,'num_of_cards');
											$count_inc 	= $count + 1;
											$query7		= "UPDATE `winer` SET `num_of_cards` = '$count_inc' WHERE `custemer_id` = '$level1'";
											$query_run	= mysql_query($query7);
										}
										else{
											$query1		 = @"INSERT INTO `winer`(custemer_id,firstname,lastname,num_of_cards) VALUES('$level1','$first_name','$last_name','1')";
											$query_run1  = mysql_query($query1);
										}
									for($i = 0; $i < 4; $i++){
										$query2 = @"INSERT INTO `cards` VALUES (NULL,'$level2','$level3','$level4','$level5','$level6','$cus_id')";
										$query_run2 = mysql_query($query2);
									}
										$query3 = "DELETE FROM `cards` WHERE `card_number` = '$card_number'";
										$query_run3 = mysql_query($query3);
										include_once("confirm.php");
										
										$to 		= $email;	
										$subject 	= "test mail";
										$message	= $password;
										$from		= "asewlove@yahoo.com" ;
										$header		= 'from:'.$from;
										if (@mail($to, $subject, $message,$header)){ 
											echo 'thank you for contacting us we will get back to you soon!';
											}
											else{
											echo 'sorry an error courred plase try again later';
											}

																																								
								}
						}
					
						
				}
				else{
					echo 'database error please try again in a momment';
				}
			}
			else{
				echo 'The card is not registered in the database.';
			}
		}else{
			echo 'Email address do not much.';
			}
		
	}
	else{
		echo 'You must fill in all of the fields.';
		
	}
}
?>
