<?php
include 'global.php';
$link=mysqli_connect("localhost","bitcoinindia", "989655907010","bitcoinindia_userdata");

echo mysqli_connect_error();
if($_POST['register'])
{
    $username=addslashes(strip_tags($_POST['username']));
    $password=addslashes(strip_tags($_POST['password']));
    $email=addslashes(strip_tags($_POST['email']));
   
   
    if (!$username||!$password||!$email) {
        echo "Plz fill all the feilds";
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
            
            $headers = "From: 'Bitcoin India' <no-reply@bitcoinindia.in>"."\r\n";
		
	
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=utf-8\r\n";
                 
           
          
     
		$body.="<title>Confirm your email to complete your registration</title>";
		$body.="<div style='border:1px solid #ccc; margin:0px 0px 0px 20px; color:#333; width:80%'>";
		$body.="<h1 style='color:#fff;background-color:#F44336 !important;padding: 20px 20px;margin:0px;'>Bitcoin India</h1>";
		$body.="<div style='padding:20px;'>";
		$body.="<strong>Dear $username,</strong>";
		$body.="<br><br><br>";
		
		$body.="Welcome to Bitcoin India – Most reliable and fastest way to covert your bitcoins into Indian ruppes. <br><br> ";
		
		$body.="Your e-mail address for logging in is $email. <br><br> <button style='background-color: #4CAF50;font-size: 16px;border-radius: 8px;padding: 10px 20px;'><a style='text-decoration: none; color:#fff' href='https://bitcoinindia.in/pawan/activate.php?token=$code';>Activate</a></button>";
		$body.="<br><br>";
		$body.="I hope you have a wonderful time with Bitcoin India. If you have any questions or comments, feel free to write to us at ";
		$body.="support@bitcoinindia.in <br><br>";
		
		$body.="Thanks for enrolling with Bitcoin India! <br><br>";
		$body.="Best regards, <br><br>";
		
		$body.="Sunil Dhillon<br>";
		$body.="CEO and founder <br>";
		$body.="Bitcoinindia.in";
		$body.="</div>";
		//$body.="<div style='color:#fff;background-color:#F44336 !important;padding: 20px 20px;margin:20px 0px;'>Copyright © 2016 Encapsulate Pvt. Ltd</h1><br>";
		
		
		
		$body.="</div>";
		
            
            
            if (!mail($to,$subject,$body,$headers)) {
                echo "we are not able to register!";
            }
            else
            {
            echo "registration completed please check the email ($email) to activate your account";
             $query="INSERT INTO users VALUES ('','$username','$password','$email','$code','0')";
            mysqli_query($link,$query);
            }
           
            
            
        }
      
    }

}


?>