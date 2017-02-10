<?php
error_reporting(E_ALL ^ E_DEPRECATED);
	$host = "127.0.0.1";
	$user = 'root';
	$pass = '';
	$dbname = 'api';
        // create db link
        $link = mysql_connect($host, $user, $pass);

        //select the database
        mysql_select_db($dbname, $link);