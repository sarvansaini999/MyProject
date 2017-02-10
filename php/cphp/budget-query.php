<?php
require_once 'core/init.php';
$budget = new Budget();
$desc = $total = "";
if(isset($_POST['apm'])){
	$user_id = $_POST['u_id'];
	$apm = $_POST['apm'];
	
	echo $sql = "select total from budget where user_id = " .$user_id . "ORDER BY id DESC LIMIT 1";
	$rows = mysql_query($sql);
	while($row = mysql_fetch_array($rows)){
		echo $rows->total;
	}
	
	try {
		$budget->add(array(
			'user_id' => $user_id,
			'added' => $apm,
			'exp' => 0,
			'desc' => $desc,
			'total' => $total,
			'date' => date('Y-m-d H:i:s')
		));
			
	} catch(Exception $e) {
		//echo $error, '<br>';
	}
	
}
