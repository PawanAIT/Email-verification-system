<?php
//include 'global.php';
session_start();
$link=mysqli_connect("127.0.0.1","u385277589_user", "09919186041","u385277589_ait");
if($_POST['register'])
{
	 if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
      }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
          }
    $pass=addslashes(strip_tags($_POST['password']));
    $token=$_SESSION['temp'];
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