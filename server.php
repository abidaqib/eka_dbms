<?php
session_start();

	if(isset($_POST['signUpButtom'])){
		echo $_POST['name'];
		echo $_POST['number'];
		echo $_POST['email'];
		echo $_POST['password'];
		echo $_POST['re_password'];
	}

?>