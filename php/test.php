<?php
$a = "Sr. PHP Web Engineer (Remote)", "Sr. PHP Web Engineer (Remote)", "Sr. PHP Web Engineer (Remote)", "Sr. PHP Web Engineer (Remote)", "Full-Stack Rock Star Developer - Remote", "Remote Freelance Website Developer", "PHP/JavaScript Web Developer for full time telecommute growing a SaaS app", "PHP Developer", "Junior Web Developer", "Junior Web Developer", "PHP Developer", "Entry Level Developer", "Full Stack Developer", "Full Stack Developer", "Software Developer", "Jounior Software Developer", "Web Development Intern - Unpaid", "Web Developer (2 Positions) (4950)", "Remote (US-based) Backend Developer", "RPG Developer", "Back End Software Engineer/Developer", "Back End Software Engineer/Developer", "Back End Software Engineer/Developer", "PHP Developer-Minneapolis-MN-6-12 Months", "Web Application Programmer";
$test = array($a);
echo "<pre>";
print_r($test);
echo "</pre>";
$orig = "I'll \"walk\" the <b>dog</b> now";

$a = htmlentities($orig);

$b = html_entity_decode($a);

echo $a; // I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now
echo '<br>';
echo $b; // I'll "walk" the <b>dog</b> now
$datein = "January 2016";
//echo "<br>". $old_date = date(' F Y');              // returns Saturday, January 30 10 02:06:34
echo "<br>".$old_date_timestamp = strtotime($datein);
echo "<br>".$new_date = date('Y-m', $old_date_timestamp);
$datein = '21-12-2016';
if(preg_match('/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/', $datein)){
    echo 'go';
}else{
    echo 'no go';
}
?>


