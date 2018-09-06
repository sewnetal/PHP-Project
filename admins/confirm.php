<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ALEHUSIKET</title>
<link rel="stylesheet" href="../style/style.css"/>
</head>

<body bgcolor="#A1BBD7">
<div align="center" id="mainwrapper"> 
<?php include_once("../templets/admin_header.php"); ?>
<?php include_once("../templets/admin_manu.php"); ?>

			<div id ="main_id">
                    <section id = "main_section">
                        <article>
                            <header>
                               <hgroup>
                              
							  <table width="355" border="1" height="400" background="../style/backgeound001.jpg" onclick="windos">
                                  <tr>
                                    <td width="345" align="center">ALEHU SIKET
                                    <table width="280" border="1" align="center" cellpadding="20">
                                          <tr>
                                            <td width="30">1</td>                                          
                                            <td width="158" align="center"> 
											<?php 											
											$query1			="SELECT `firstname`,`lastname` FROM `custemers` WHERE `custemer_id` = '$level2'";
											if($query_run		= mysql_query($query1)){
												$query_num_rows	= mysql_num_rows($query_run);
													if($query_num_rows == 1){
														while($fech1 =  mysql_fetch_array($query_run)){
															$first_name = $fech1["firstname"];
															$last_name 	= $fech1["lastname"];
															echo $first_name."\n".$last_name."<br/>".$level2;
														}
													}
											}
											?>
											</td>
                                          </tr>
                                          <tr>
                                            <td width="30">2</td>                                          
                                            <td width="158" align="center">
                                            <?php 
											$query1			="SELECT `firstname`,`lastname` FROM `custemers` WHERE `custemer_id` = '$level3'";
											if($query_run		= mysql_query($query1)){
												$query_num_rows	= mysql_num_rows($query_run);
													if($query_num_rows == 1){
														while($fech1 =  mysql_fetch_array($query_run)){
															$first_name = $fech1["firstname"];
															$last_name 	= $fech1["lastname"];
															echo $first_name."\n".$last_name."<br/>".$level3;
														}
													}
											}
											?>
                                            </td>
                                          </tr>
                                         <tr>
                                            <td width="30">3</td>                                          
                                            <td width="158" align="center"><?php 
											$query1			="SELECT `firstname`,`lastname` FROM `custemers` WHERE `custemer_id` = '$level4'";
											if($query_run		= mysql_query($query1)){
												$query_num_rows	= mysql_num_rows($query_run);
													if($query_num_rows == 1){
														while($fech1 =  mysql_fetch_array($query_run)){
															$first_name = $fech1["firstname"];
															$last_name 	= $fech1["lastname"];
															echo $first_name."\n".$last_name."<br/>".$level4;
														}
													}
											}
											?></td>
                                          </tr>
                                          <tr>
                                            <td width="30">4</td>                                          
                                            <td width="158" align="center">
                                            <?php 
											$query1			="SELECT `firstname`,`lastname` FROM `custemers` WHERE `custemer_id` = '$level5'";
											if($query_run		= mysql_query($query1)){
												$query_num_rows	= mysql_num_rows($query_run);
													if($query_num_rows == 1){
														while($fech1 =  mysql_fetch_array($query_run)){
															$first_name = $fech1["firstname"];
															$last_name 	= $fech1["lastname"];
															echo $first_name."\n".$last_name."<br/>".$level5;
														}
													}
											}
											?>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td width="30">5</td>                                          
                                            <td width="158" align="center"><?php 
											$query1			="SELECT `firstname`,`lastname` FROM `custemers` WHERE `custemer_id` = '$level6'";
											if($query_run		= mysql_query($query1)){
												$query_num_rows	= mysql_num_rows($query_run);
													if($query_num_rows == 1){
														while($fech1 =  mysql_fetch_array($query_run)){
															$first_name = $fech1["firstname"];
															$last_name 	= $fech1["lastname"];
															echo $first_name."\n".$last_name."<br/>".$level6;
														}
													}
											}
											?></td>
                                          </tr>
                                          <tr>
                                            <td width="30"> 
                                            6                                  
                                            </td>                                          
                                            <td width="158" align="center">
                                            <?php 
											$query1			="SELECT `firstname`,`lastname` FROM `custemers` WHERE `custemer_id` = '$cus_id'";
											if($query_run		= mysql_query($query1)){
												$query_num_rows	= mysql_num_rows($query_run);
													if($query_num_rows == 1){
														while($fech1 =  mysql_fetch_array($query_run)){
															$first_name = $fech1["firstname"];
															$last_name 	= $fech1["lastname"];
															echo $first_name."\n".$last_name."<br/>".$cus_id;
														}
													}
											}
											?>        
                                            </td>
                                          </tr>
                                        </table>
                                       <?php 
									   		$query2 = "SELECT `card_number` FROM `cards` WHERE `level6` = '$cus_id'";
											if($query_run		= mysql_query($query2)){
												$query_num_rows	= mysql_num_rows($query_run);
													if($query_num_rows != 0){
														while($fech1 =  mysql_fetch_array($query_run)){
															$card1 = $fech1["card_number"];															
															echo "CARD NUMBER".$card1."<br/>";														
															
														}
														
													}
											}
									   ?> 
                                        <input type="button" value="Print this page" onclick="printpage()">										
                                    </td>                                    
                                  </tr>
                                 
                                </table> 
                              
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                               
                               </hgroup>
                            </header>
                        </article>
                    </section>
           </div> 
<?php include_once("../templets/templet_footer.php"); ?>
</div>
</body>
</html>