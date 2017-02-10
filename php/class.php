<?php
class Practice{
var $name;
var $age;
var $role;
function description(){

	
	$data = array(
		'Q1' => 'What is Your Name',
		'Ans1' =>'Sir, my Name is '. $this->name,
		'Q2' => 'How many year old you?',
		'Ans2' => 'Sir, i am '. $this->age . ' years old',
		'Q3' => 'What is your role in IT field',
		'Ans3' => 'Main Hoon don, Main hoon don '.$this->role
	
	);
	return $data;
}


}
$desc = new Practice();
$desc->name = "Jatt James Bond";

$desc->age = 40;
$desc->role = "Naam Hai Sehensaha";
$results = $desc->description();
echo "Khushu Interview <br>" ;
foreach($results as $row  => $row_value){
	
	echo $row . ": " . $row_value;
    echo "<br>";
}
?>