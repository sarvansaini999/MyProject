<?php
$format = "html";
if(isset($_GET['submit'])){
if(isset($_GET['format'])){
	$format = $_GET['format'];
}
$api = 'http://localhost:8080/php/server/';
$sUrl = $api."?format=".$format;
    

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $sUrl);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $sData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $vRes = curl_exec($ch);
    curl_close($ch);

    header('Content-Type: text/'.$format);
    echo $vRes;
    exit;
	
}	
	?>
<html>
	<head>
	<title>PHP Api Call</title>
	</head>
	<body>
	
	<div>
	<form>
	<label>Select Format</label>
	<select name="format">
	<option value="html">HTML</option>
	<option value="json">JSON</option>
	<option value="xml">XML</option>
	<input type="submit" name="submit" Value="Submit">
	</select>
	</form>
	</div>
	
	</body>
</html>