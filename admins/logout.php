<?php
require 'core.php';
require 'db_conect.php';
if(isset($_SERVER['HTTP_REFERER'])){
session_destroy();
header('Location: index.php');

}else{ 
}
?>