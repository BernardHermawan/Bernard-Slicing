<?php
	include"../../config/connection.php";
	$userpass=$con->escape_string($_POST['username']);
	$password=$con->escape_string(md5($_POST['password']));
	$r=$con->query("select * from user where (username='$userpass' or email='$userpass') and password='$password'");
	$d=$r->num_rows;
	$s=$r->fetch_assoc();
	if($d>0){
		session_start();
		$_SESSION['username']=$userpass;
		$_SESSION['user_id']=$s['id_user'];
		header("location:../../user/index.php");
	}else{
		echo"
			<script>
				alert('Username atau Password salah');
				window.location='../../login.php';
			</script>";
	}
	