<?php
	switch(@$_GET['action']){
	case "tambah_tim":
		include"../../config/connection.php";
		include"../../lib/crud.php";
		session_start();
		$insert=new database;
		$target_dir="../../assets/img/tim/";
		$target_file = $target_dir . basename($_FILES["logo"]["name"]);
		$data['nama_tim']=$_POST['nama_tim'];
		$data['logo']=$_FILES['logo']['name'];
		$data['id_user']=$_SESSION['user_id'];
		$temp=$_FILES['logo']['tmp_name'];
		move_uploaded_file($temp, $target_file);
		$insert->insert("tim",$data);
		header("location:../../user/index.php?page=tim");
	break;
	case"tambah_divisi":
		include"../../config/connection.php";
		include"../../lib/crud.php";
		$insert=new database;
		$div=$_POST['divisi'];
		$tim=$_POST['tim'];
			foreach($div as $divisi){
				$con->query("insert into divisi value('','$tim','$divisi')");
			}
		
		header("location:../../user/index.php?page=detail_tim&tim=$tim");
	break;
	case"tambah_anggota":
		include"../../config/connection.php";
		include"../../lib/crud.php";
		$insert=new database;
		$div=$_POST['divisi'];
		$tim=$_POST['tim'];
		$angg=$_POST['anggota'];
			foreach($angg as $anggota){
				$con->query("insert into anggota_tim value('','$tim','$div','$anggota')");
			}
		
		header("location:../../user/index.php?page=detail_tim&tim=$tim");
	break;
	}
	
	
	