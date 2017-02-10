<?php
	session_start();
	include 'classes/db.crud.php';
	//$crud->logout();
	session_destroy();
	header('Location: login.php');
?>