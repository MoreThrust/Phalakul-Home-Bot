<!-- ========================================  STATUS ======================================== -->



<!-- ==================== Voltage ==================== -->
<?php $curl = curl_init(); 
curl_setopt_array($curl, array( CURLOPT_RETURNTRANSFER => 1, 
CURLOPT_URL => 'https://api.anto.io/channel/get/DL32Cs80BDqJwgimtX5oBIDTMOlAt8VUBPGElAA4/R_H_A_S/Voltage', CURLOPT_USERAGENT => 'Codular Sample cURL Request' )); 
$resp = curl_exec($curl); curl_close($curl); $val = explode('"', $resp); $st_Voltage = $val[7]; ?>
<!-- ==================== END Voltage ==================== -->


<!-- ==================== Temp ==================== -->
<?php $curl = curl_init(); 
curl_setopt_array($curl, array( CURLOPT_RETURNTRANSFER => 1, 
CURLOPT_URL => 'https://api.anto.io/channel/get/DL32Cs80BDqJwgimtX5oBIDTMOlAt8VUBPGElAA4/R_H_A_S/living_temp', CURLOPT_USERAGENT => 'Codular Sample cURL Request' )); 
$resp = curl_exec($curl); curl_close($curl); $val = explode('"', $resp); $st_living_temp = $val[7]; ?>
<!-- ==================== END Temp ==================== -->


<!-- ==================== HUMI ==================== -->
<?php $curl = curl_init(); 
curl_setopt_array($curl, array( CURLOPT_RETURNTRANSFER => 1, 
CURLOPT_URL => 'https://api.anto.io/channel/get/DL32Cs80BDqJwgimtX5oBIDTMOlAt8VUBPGElAA4/R_H_A_S/living_humi', CURLOPT_USERAGENT => 'Codular Sample cURL Request' )); 
$resp = curl_exec($curl); curl_close($curl); $val = explode('"', $resp); $st_living_humi = $val[7]; ?>
<!-- ==================== END HUMI ==================== -->


<!-- ==================== Rain ==================== -->
<?php
$curl = curl_init();
curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => 1,
CURLOPT_URL => 'https://api.anto.io/channel/get/DL32Cs80BDqJwgimtX5oBIDTMOlAt8VUBPGElAA4/R_H_A_S/Rain',CURLOPT_USERAGENT => 'Codular Sample cURL Request'));
$resp = curl_exec($curl);curl_close($curl);$val = explode('"', $resp);
if($val[7] == "1")
{
    $st_rain = "ฝนกำลังตก";
}
elseif($val[7] == "0")
{
    $st_rain = "ไม่มีฝน";
}
?>
<!-- ==================== END Rain ==================== -->


<!-- ==================== Door ==================== -->
<?php
$curl = curl_init();
curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => 1,
CURLOPT_URL => 'https://api.anto.io/channel/get/DL32Cs80BDqJwgimtX5oBIDTMOlAt8VUBPGElAA4/R_H_A_S/Door',CURLOPT_USERAGENT => 'Codular Sample cURL Request'));
$resp = curl_exec($curl);curl_close($curl);$val = explode('"', $resp);

if($val[7] == "1")
{
    $st_door = "ล็อกแล้ว";
    $st_door_c = "#20bf6b";
}
elseif($val[7] == "0")
{
    $st_door = "ยังไม่ได้ล็อก";
    $st_door_c = "#eb3b5a";
}
?>
<!-- ==================== END Door ==================== -->

<!-- ==================== Lamp ==================== -->
<?php
$curl = curl_init();
curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => 1,
CURLOPT_URL => 'https://api.anto.io/channel/get/DL32Cs80BDqJwgimtX5oBIDTMOlAt8VUBPGElAA4/R_H_A_S/living_lamp',CURLOPT_USERAGENT => 'Codular Sample cURL Request'));
$resp = curl_exec($curl);curl_close($curl);$val = explode('"', $resp);
if($val[7] == "1")
{
    $st_living_lamp = "เปิดอยู่";
    $st_living_lamp_c = "#20bf6b";
}
elseif($val[7] == "0")
{
    $st_living_lamp = "ปิดอยู่";
    $st_living_lamp_c = "#eb3b5a";
}
?>
<!-- ==================== END Lamp ==================== -->

<!-- ==================== Door ==================== -->
<?php
$curl = curl_init();
curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => 1,
CURLOPT_URL => 'https://api.anto.io/channel/get/DL32Cs80BDqJwgimtX5oBIDTMOlAt8VUBPGElAA4/R_H_A_S/BLE_ID',CURLOPT_USERAGENT => 'Codular Sample cURL Request'));
$resp = curl_exec($curl);curl_close($curl);$val = explode('"', $resp);
$st_BLE_ID = $val[7];

?>
<!-- ==================== END Door ==================== -->

<!-- ======================================== END STATUS ======================================== -->
