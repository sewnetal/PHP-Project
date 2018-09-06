<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ALEHUSIKET</title>
<link rel="stylesheet" href="../style/style.css">
</head>

<body>
<div align="center" id="mainwrapper"> 
<?php include_once("../templets/admin_header.php"); ?>
<?php include_once("../templets/admin_manu.php"); ?>
			<div id ="main_id">
                    <section id = "main_section">
                        <article>
                            <header>
                                <hgroup>
                                <h1>Registration form</h1>
                                <?php include_once("regiform.php");
									   include_once("register.php");
									   
								 ?>
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