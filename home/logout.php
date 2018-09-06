<?php
require 'core.php';
if(isset($_SERVER['HTTP_REFERER'])){
session_destroy();
header('Location: ../index.php');

}else{ 'the referer is not working';
}
?>