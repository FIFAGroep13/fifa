<?php
require_once('config.php');


if(isset($_POST['login'])){
			
	$errMsg = '';
	//email and password sent from Form
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	
	if($email == '')
		$errMsg .= 'You must enter your Email<br>';
	echo $errMsg;
	if($password == '')
		$errMsg .= 'You must enter your Password<br>';
	echo $errMsg;
	
	if($errMsg == ''){
		$records = $dbh->prepare('SELECT id,email,password FROM  tbl_admins WHERE email = :email');
		$records->bindParam(':email', $email);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);
	}
		if(count($results) > 0){
			$_SESSION['email'] = $results['email'];
			$_SESSION['logged'] = true;
			header('location: admin.php');
			exit;
		}else{
			$errMsg .= 'email and Password are not found<br>';
			echo $errMsg;
		}
	}