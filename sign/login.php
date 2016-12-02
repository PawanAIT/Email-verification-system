<?php
//include 'global.php';
//$session_username=$_SESSION['username'];
$link=mysqli_connect("127.0.0.1","u385277589_user", "09919186041","u385277589_ait");
if($_POST['login'])
{
if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
      }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
          }
	$email=addslashes(strip_tags($_POST['email']));
     	$password=addslashes(strip_tags($_POST['password']));
       if (!$email||!$password) {
        echo "Plz fill all the feilds";
    }
    
    else
    {	
    	$query="SELECT * FROM users WHERE email='$email'";
    	$login=mysqli_query($link,$query);
    	$count = mysqli_num_rows($login);
    	if ($count == 0) {
            header("Location:http://aitproject.16mb.com/hms/sign/error404.php");
    	}
    	else
    	{
    		while($login_row=mysqli_fetch_assoc($login))
    		{
    			$password_db=$login_row['password'];
    			$password=md5(md5($password).$email);
    			if ($password!=$password_db) {
    				echo "incorrect password";
    			}
    			else
    			{
    				$active=$login_row['active'];
    				$email=$login_row['email'];
    				if ($active==0) {
    					echo "You havent activated your account!!,Please check your email($email)";
    				}
    				else
    				{
    					echo "you are logged in";
    					//$_SESSION['username']=$username;
    					//header("Location:hms/index.html");
    					

    				}
    			}
    		}
    	}
    }
}
else 
{
  header("Location:http://aitproject.16mb.com/hms/sign/error404.php");
}

        ?>