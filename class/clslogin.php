<?php
class login
{
	function mylogin($user,$pass)
	{
		if($user == 'admin' && $pass == '123')
		{
			session_start();
			$_SESSION['user']=$user;
			$_SESSION['pass']=$pass;
			header('location: admin.php');
		}
		else
		{
			return 0;
		}	
	}
	function confirmlogin($user,$pass)
	{
		if($user!='admin' || $pass!='123')
		{
			header('location:login.php');	
		}
	}
}
?>