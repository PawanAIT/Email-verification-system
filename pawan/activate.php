<?php
include 'global.php';

$code=$_GET['token'];
$link=mysqli_connect("localhost","bitcoinindia", "989655907010","bitcoinindia_userdata");

if(!code||!id)
	echo "No code supplied";
else
{
	$query="SELECT * FROM users WHERE code='$code' ";
	$check=mysqli_query($link,$query);
	if(mysqli_num_rows($check)==0)
		{die("Invalid ID or Code");}
	$query="SELECT * FROM users WHERE code='$code'  AND active=1";
	$check=mysqli_query($link,$query);
	if(mysqli_num_rows($check)>=1)
		echo "You have already activated your account";
	else
	{
		$query="UPDATE users SET active='1' WHERE code='$code' ";
		$activate=mysqli_query($link,$query);
		echo "Your account has been activated";
	}
}

?>