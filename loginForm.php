<?php   
session_start();

//This get the user name 

function loginForm(){  
     echo' 
     <div id="loginform"> 
    <form action="loginForm.php" method="post"> 
        <p>Please enter your name to continue:</p> 
         <label for="name">Name:</label> 
         <input type="text" name="name" id="name" /> 
         <input type="submit" name="enter" id="enter" value="Enter" /> 
     </form> 
     </div> 
     ';  
 }  
 
 if(isset($_POST['enter'])){  
     if($_POST['name'] != ""){  
         $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
	 header("Location: index.php");
	 die();
     }  
     else{  
         echo '<span class="error">Please type in a name</span>';  
     }  
 }  else {
   loginForm();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<title>Selorm Chat</title>  
<link type="text/css" rel="stylesheet" href="css/style.css" />  
</head>
<body>
</body>
</head>


