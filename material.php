<?php
require 'core.php';
require 'db_conect.php';
if(@isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
include 'material.inc.php';

}else{
echo 'pls sign up for full access of the documentetion';
	include 'index.php';
	}
?>