<?php
	include"../../lib/crud.php";
	include"../../config/connection.php";
	$insert=new database;
	$data['username']=$con->escape_string($_POST['username']);
	$data['email']=$con->escape_string($_POST['email']);
	$data['password']=$con->escape_string(md5($_POST['password']));
	$data['level']="2";
	$confirm_password=$con->escape_String(md5($_POST['confirm_password']));
	if($data['password'] == $confirm_password){
			$insert=$insert->insert("user",$data);
			header("location:../../login.php");
	}else{
		echo"
			<script>
				alert('Password belum cocok');
				window.location='../../register.php';
			</script>";
	}
	