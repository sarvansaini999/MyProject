<?php
	include 'includes/init.php';
	include 'includes/header.php';
	include 'classes/db.crud.php';
?>
<?php

	$error = "";
	$msg = "";
	$errMsg = "";

	$crud = new CRUD();

$desc = $total = "";
if(isset($_POST['apm']) && $_POST['is_ajax'] == "added"){
	
	$user_id = $_POST['u_id'];
	$apm = $_POST['apm'];
	$exp = 0;
	$date = date('Y-m-d H:i:s');
	$t = $crud->get_last_row($user_id);
	
		$total = $t + $apm;
	
	if($error != true){
		$crud->add($user_id,$apm,$exp,$desc,$total,$date);
		echo $msg = "Money Added successfully";
	}else{
		echo $msg = $errMsg . "Please try Again";
	}
	
}

if(isset($_POST['spm']) && $_POST['is_ajax'] == "sub"){
	
	$user_id = $_POST['u_id'];
	$apm = 0;
	$exp = $_POST['spm'];
	$date = date('Y-m-d H:i:s');
	$t = $crud->get_last_row($user_id);
	
		$total = $t - $exp;
	
	if($error != true){
		$crud->add($user_id,$apm,$exp,$desc,$total,$date);
		echo $msg = "Money Added successfully";
	}else{
		echo $msg = $errMsg . "Please try Again";
	}
	
}
