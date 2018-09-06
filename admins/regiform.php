<?php
include "register.php";
?>
<html>
<head>
<title>
Alehu Siket
</title>
</head>
<body>
<table border ="1"width ="45%" align ="center" background="../style/backgeound003.jpg">
<tr>
<td>
<form action = "<?php echo $current_file;?>" method = "POST">
Card Number:
<p>	<input type ="number" 	name ="card_number" size= "40"		maxlength ="40"></p>
Firstname:
<p><input type = "text" 	name ="firstname"	size= "40"		maxlength ="40"></p>
Lastname:
<p><input type = "text" 	name ="lastname"	size= "40"		maxlength ="40"></p>	
Email:
<p><input type = "text" 	name ="email"		size= "40"		maxlength ="40"></p>
Re-enter email:
<p>	<input type = "text" 	name ="email2"		size= "40"		maxlength ="40"></p>
<p>					<input type ="submit" 	name ="submit" value ="submit"> 
					<input type ="submit" 	name ="cancel" value ="cancel"></p>
</form>
</td>
</tr>
</table>
</body>
</html>

