<?php
$format = "";
if(isset($_GET['format'])){
	$format = $_GET['format'];
}


include('db.php');
include('function.php');

echo getVideos($format);

?>