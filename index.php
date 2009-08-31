<?php  
session_start();

 if(!isset($_SESSION['name'])){
     require_once('loginForm.php');
 } else { 
     require_once("chat.php");
 }

?>  
 
