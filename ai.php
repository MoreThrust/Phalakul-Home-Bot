<?php 
$curl = curl_init(); 
curl_setopt_array($curl, array( 
    CURLOPT_RETURNTRANSFER => 1, 
    CURLOPT_URL => 'https://api.anto.io/channel/get/DL32Cs80BDqJwgimtX5oBIDTMOlAt8VUBPGElAA4/R_H_A_S/Voltage', 
    CURLOPT_USERAGENT => 'Codular Sample cURL Request' 
)); 

$resp = curl_exec($curl); curl_close($curl); 
echo $resp; 
$val = explode('"', $resp); 
$st_Voltage = $val[7]; 

?>