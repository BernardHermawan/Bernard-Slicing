<?php
	switch(@$_GET['action']){
	case "insert":
		include"../../config/connection.php";
		include"../../lib/crud.php";
		$insert=new database;
		$index="judul_turnamen,detail_turnamen,hadiah_turnamen,peraturan_turnamen,slot_turnamen,id_game,openregist_turnamen,closeregist_turnamen,start_turnamen,end_turnamen";
		$index_arr=explode(",",$index);
		foreach($index_arr as $i_arr){
			$data[$i_arr]=$con->escape_string($_POST[$i_arr]);
		}
		$insert->insert("turnamen",$data);
		header("location:../../user/index.php?page=turnamen");
	break;
	}
	