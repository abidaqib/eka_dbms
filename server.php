<?php
session_start();
$error = array();

$db = mysqli_connect('localhost', 'root', '', 'furniture_management');

	if(isset($_POST['signUpButtom'])){
		$name = mysqli_real_escape_string($db,$_POST['name']);
		$number = mysqli_real_escape_string($db,$_POST['number']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$pass = mysqli_real_escape_string($db,$_POST['password']);
		$repass = mysqli_real_escape_string($db,$_POST['re_password']);

		if($pass == $repass){

		$query="INSERT INTO `info`( `name`, `number`, `email`, `pass`) VALUES ('".$name."','".$number."', '".$email."', '".$pass."')";
			if(mysqli_query($db,$query))
			{
				header('location: index.php');
			}
			else
			{
				array_push($error, "Server not connected");
			}
		}
		else{
				array_push($error, "Password dont match!");
				
		}

	}

	else if(isset($_POST['signIn']))
	{
		$email=mysqli_real_escape_string($db,$_POST['email']);
		$password=mysqli_real_escape_string($db,$_POST['pass']);
		$query="SELECT * FROM `info` WHERE email = '".$email."' AND pass = '".$password."'";
		$r=mysqli_query($db,$query);
		$res=mysqli_fetch_array($r);
		if(sizeof($res)>0)
		{
			$_SESSION['id']  = $res['id'];
			$_SESSION['pemail']  = $res['email'];
			header('location: index.php');
		}
		else
		{
			array_push($error, "email and password not match.");
		}
	}
	elseif (isset($_POST['logout'])) {
		session_destroy();
		header('location: index.php');
	}

?>