<?php
	switch(@$_GET['page']){
		default:
			include"pages/home.php";
		break;
		case"turnamen":
			include"pages/turnamen/turnamen.php";
		break;
		case"buat_turnamen":
			include"pages/turnamen/buat_turnamen.php";
		break;
		case"detail_turnamen":
			include"pages/turnamen/detail_turnamen.php";
		break;
		case"tim":
			include"pages/tim/tim.php";
		break;
		case"detail_tim":
			include"pages/tim/detail_tim.php";
		break;
	}

			