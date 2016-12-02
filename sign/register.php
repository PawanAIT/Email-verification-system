<?php
//include 'global.php';
$link=mysqli_connect("127.0.0.1","u385277589_user", "09919186041","u385277589_ait");
echo mysqli_connect_error();
if($_POST['register'])
{
    $username=addslashes(strip_tags($_POST['username']));
    $password=addslashes(strip_tags($_POST['password']));
    $email=addslashes(strip_tags($_POST['email']));
    $state = addslashes(strip_tags($_POST['state']));
    $mob_num = addslashes(strip_tags($_POST['mob_num']));
    $source = $_POST['source'];

   
   
    if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
      }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
          }
    else
    {
        $password=md5(md5($password).$email);
        $query="SELECT * FROM users WHERE email='$email'";
        $check=mysqli_query($link,$query);
         //echo mysqli_num_rows($check);
        if (mysqli_num_rows($check)>=1) {
            echo "email alredy exist";
        }
        else
        {
            $code = md5(md5(uniqid(rand(),1)).$email);
            
            $to=$email;
            $subject="Confirm your email to complete registration";
            
            $headers = "From: 'Email verification' <no-reply@aitproject.in>"."\r\n";
		
	
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=utf-8\r\n";
                 
           $linkadd="http://aitproject.16mb.com/hms/sign/activate.php?token=$code";
          
     
		$body.="<title>Confirm your email to complete your registration</title>";
		$body.="<div style='border:1px solid #ccc; margin:0px 0px 0px 20px; color:#333; width:80%'>";
		$body.="<h1 style='color:#fff;background-color:#F44336 !important;padding: 20px 20px;margin:0px;'>Email Verification System India</h1>";
		$body.="<div style='padding:20px;'>";
		$body.="<strong>Dear $username,</strong>";
		$body.="<br><br><br>";
		
		$body.="Welcome to email verification system– Most reliable and fastest way to secure your account <br><br> ";
		
		$body.="Your e-mail address for logging in is $email. <br><br><a style='text-decoration: none;'href='http://aitproject.16mb.com/hms/sign/activate.php?token=$code';><h3>Activate</h3></a>";
		$body.="<br><br>";
		$body.="I hope you have a wonderful time with Email Verification System India. If you have any questions or comments, feel free to write to us at ";
		$body.="support@bitcoinindia.in <br><br>";
		
		$body.="Thanks for enrolling with Email Verification System India! <br><br>";
		$body.="Best regards, <br><br>";
		
		$body.="Pawan kumar<br>";
		$body.="CEO and founder <br>";
		$body.="aitproject.16mb.com";
		$body.="</div>";
		//$body.="<div style='color:#fff;background-color:#F44336 !important;padding: 20px 20px;margin:20px 0px;'>Copyright © 2016 Encapsulate Pvt. Ltd</h1><br>";
		
		
		
		$body.="</div>";
		
            
            
            if (!mail($to,$subject,$body,$headers)) {
                echo "we are not able to register!";
            }
            else
            {
            echo "registration completed please check the email ($email) to activate your account";
             $query="INSERT INTO users VALUES ('','$username','$password','$email','$code','0','$mob_num','$source','$state')";
            mysqli_query($link,$query);
            }
           
            
            
        }
      
    }

}


?>