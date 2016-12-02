<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Sign up | Bitcoin India</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body><!-- start header div -->
<?php
include 'global.php';
$link=mysqli_connect("localhost","bitcoinindia", "989655907010","bitcoinindia_userdata");
if($_POST['register'])
{
	
    $pass=addslashes(strip_tags($_POST['password']));
    $token=$_GET['token'];
    if(!$token)
    {
    	die("supply token");
    }
    $query="SELECT * FROM users where md5(1290*3+id)='$token'";
    $result=mysqli_query($link,$query);
   $Results = mysqli_fetch_array($result);
  $email=$Results['email'];
  $pass=md5(md5($pass).$email);
  $sql = "UPDATE users SET password='$pass' where md5(1290*3+id)='$token'";
  mysqli_query($link,$sql);
  echo "your password has been reset please login";
  
  
   
}
   

?>


<div id="wrap">
<h1 style="text-align: center;"><span style="font-family:verdana,geneva,sans-serif;">Signup Form</span></h1>

<p>Enter your details for proceed to buy bitcoin :)&nbsp;</p>
<!-- start sign up form -->

<form action="" method="post">

<p><label for="password">password:</label> <input name="password" type="password" value="" /> <br>
<label for="password">confirm password:</label> <input name="password1" type="password" value="" /> 
<input class="submit_button" name="register" type="submit" value="Register" /></p>
</form>
<!-- end sign up form --></div>
<!-- end wrap div --></body>
</html>