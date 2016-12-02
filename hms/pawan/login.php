<?php
include 'global.php';
//$session_username=$_SESSION['username'];
$link=mysqli_connect("localhost","bitcoinindia", "989655907010","bitcoinindia_userdata");
if($_POST['login'])
{
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
    		echo "no such user";
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
    					header("Location:index.php");
    					

    				}
    			}
    		}
    	}
    }
}

	

        ?>