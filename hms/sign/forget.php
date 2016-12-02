<?php
$link=mysqli_connect("127.0.0.1","u385277589_user", "09919186041","u385277589_ait");
echo mysqli_connect_error();
if($_POST['register'])
{
    if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
      }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
          }
    $email=addslashes(strip_tags($_POST['email']));
   
    if (!$email) {
        echo "Plz fill all the feilds";
    }
    else
    {
        //$password=md5(md5($password).$email);
        $query="SELECT * FROM users WHERE email='$email'";
        $check=mysqli_query($link,$query);
         //echo mysqli_num_rows($check);
        if (mysqli_num_rows($check)==0) {
            echo "email does not belong to any user";
        }
        else

        {
         
            $Results = mysqli_fetch_array($check);
            $encrypt = md5(1290*3+$Results['id']);
           // echo $Results['id'];
            $to=$email;
            $subject="reset your email to complete registration";
            
           $headers = "From: 'Email verification' <no-reply@aitproject.in>"."\r\n";
        
    
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n";
           
          
     
		$body.="<title>reset your email to complete your registration</title>";
		$body.="<div style='border:1px solid #ccc; margin:0px 0px 0px 20px; color:#333; width:80%'>";
		$body.="<h1 style='color:#fff;background-color:#F44336 !important;padding: 20px 20px;margin:0px;'>Email verification system</h1>";
		$body.="<div style='padding:20px;'>";
		$body.="<strong>Dear $username,</strong>";
		$body.="<br><br><br>";
		
		$body.="Welcome to email verification system– Most reliable and fastest way to secure your account <br><br> ";
        
		$body.="Your e-mail address for logging in is $email. <br><br> <button style='background-color: #4CAF50;font-size: 16px;border-radius: 8px;padding: 10px 20px;'><a style='text-decoration: none; color:#fff' href='http://aitproject.16mb.com/hms/sign/reset.php?token=$encrypt';>Activate</a></button>";
		$body.="<br><br>";
        $body.="I hope you have a wonderful time with Email Verification System India. If you have any questions or comments, feel free to write to us at ";
        $body.="support@aitproject.16mb.com <br><br>";
        
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
            echo "please check the email ($email) to reset password";
            // $query="INSERT INTO users VALUES ('','$username','$password','$email','$code','0')";
           // mysqli_query($link,$query);
            }
             
             
             
            
          
        }
      
    }

}


?>