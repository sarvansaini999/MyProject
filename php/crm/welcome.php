<?php
session_start();
echo "welcome " . $_SESSION['uname']; 
echo "<a href='logout.php'>Logout</a>";
?>