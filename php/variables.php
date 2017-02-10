<?php
	// Global Variable Test
	$name = "Smith";
	
	function testGlobal(){
		echo '<p> Name is '. $name.'</p>';
	}
	testGlobal();
	echo '<p> Name is '. $name.'</p>';
?>
<?php
	$name1 = "";
	function testLocal(){
	
		$name1 = "John";
		echo '<p> Name is '. $name1.'</p>';
	}
	testLocal();
	echo '<p> Name is '. $name1.'</p>';
?>

<?php
	$x = 5;
	$y = 6;
	function calculation(){
		global $x, $y, $z;
		$y = $x + $y;
	}
	calculation();
	echo $y;
?>
<?php
define("me", "Welcome to W3Schools.com!");

function myTest() {
    echo me;
}
 
myTest();
?>