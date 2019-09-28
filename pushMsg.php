<?php
include("template.php");
include("Status.php");
$API_URL = 'https://api.line.me/v2/bot/message';
$ACCESS_TOKEN = 'DbDJI21eID/MzvRJKEE97bA+5F2zQrx/V/JRC0N+hUKmOIsBLAc5kTMdw0lJgutrFYhZ7jj8HuTB4YMoPWvnb3P8n6Lbf67YdXiUXJDm1kAiOIVXMo1NXaUQ1kiKv8wxktZH1Sd6CWhUi0QxjhM9+AdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'a5975c29114c71eca67869c2933db9bd';
$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);
$request = file_get_contents('php://input');   // Get request content
$request_array = json_decode($request, true);   // Decode JSON to Array

$kooID = "Ue124de79c1d8b06ae61ce5bf1039f52f";
$Group = "C0d8cd89937f421f8cb314ea4c3805b94";

   $data = [
       'to' => $Group,
       'messages' => [$js_cam]
   ];
   pushMsg2($POST_HEADER, $data);
/*
if($st_living_humi == '57.3') {
   $data = [
       'to' => $kooID,
       'messages' => [$js_q_replay]
   ];
   pushMsg2($POST_HEADER, $data);
}
*/
function pushMsg2($POST_HEADER, $data)
{
   $strUrl = "https://api.line.me/v2/bot/message/push";
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $strUrl);
   curl_setopt($ch, CURLOPT_HEADER, false);
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_HTTPHEADER, $POST_HEADER);
   curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   $result = curl_exec($ch);
   curl_close($ch);
}
