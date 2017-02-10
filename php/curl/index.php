<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.zipcodeapi.com/rest/QWsBWAwAZuYzAsNwuIdfSjmQt8XkMr0Dotfl4LV4gTEQlrnQ9A52TsTnAQHniI0G/distance.xml/SN8/HU11/km");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, array(
    'nabc' => 'fafafa',
    'submit' => 'Send' // if you want 'submit' in $_POST you need this
));
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?> 

<?php
/**
 *  Example API call
 *  GET profile information
 */

// the ID of the profile

$profileID = 2;

// the token

$token = 'your token here';

// set up the curl resource

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.zipcodeapi.com/rest/QWsBWAwAZuYzAsNwuIdfSjmQt8XkMr0Dotfl4LV4gTEQlrnQ9A52TsTnAQHniI0G/distance.json/08057/28226/km");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);

// execute the request

$output = curl_exec($ch);

// output the profile information - includes the header

echo($output) . PHP_EOL;

// close curl resource to free up system resources

curl_close($ch);