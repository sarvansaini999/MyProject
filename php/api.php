<?php
  //Modify these
  $API_KEY = '260e65292388ca1745041e5574314f5e';
  $SECRET = '44616f4d64e387fb163b1e3e9a27f602';
  $TOKEN = 'c378efd4ca99c5740718a809c0732c85-1484999048';
  $STORE_URL = 'barnana-2.myshopify.com';
  

  $url = "https://api.rechargeapps.com/orders";

  $session = curl_init();

  curl_setopt($session, CURLOPT_URL, $url);
  curl_setopt($session, CURLOPT_HTTPGET, 1); 
  curl_setopt($session, CURLOPT_HEADER, false);
  curl_setopt($session, CURLOPT_CUSTOMREQUEST, "GET");
  $headers = array();
  $headers[] = "X-Recharge-Access-Token: bd83e348194849b98bb28e98adda8edd";
  $headers[] = "Accept: application/xml";
  $headers[] = "Content-Type: application/xml";
  curl_setopt($session, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

  
  $response = curl_exec($session);
  if (curl_errno($session)) {
    echo 'Error:' . curl_error($session);
}
  curl_close($session);

  echo '<pre>';
  echo $response

  
  
?>