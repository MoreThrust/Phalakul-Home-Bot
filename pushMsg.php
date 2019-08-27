<?php
include("template.php");
include("Status.php");
$API_URL = 'https://api.line.me/v2/bot/message';
$ACCESS_TOKEN = '0o0ysAsM9n8ogghDWIpHI7Hes2cIhXyaES1Hu5QA1GoJFpoF3/oR3QHHO8CJ41G1XzU2HLh7fYPXFNfUF5vHnTMHfzvVvV5bmjY8sYQAMEr6dt3JE6A0Oz8Iync6wKjk+VO3OvdvsQSOu6TSu8liQwdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'af6aadbace7145526e4d024d7b605bb5';
$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);
$request = file_get_contents('php://input');   // Get request content
$request_array = json_decode($request, true);   // Decode JSON to Array

$kooID = "Ue124de79c1d8b06ae61ce5bf1039f52f";

if($st_door == '0') {
   $data = [
       'to' => $kooID,
       'messages' => [$js_wr_login]
   ];
   pushMsg2($POST_HEADER, $data);

   $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => 'https://api.anto.io/channel/set/DL32Cs80BDqJwgimtX5oBIDTMOlAt8VUBPGElAA4/R_H_A_S/Door/1',
                CURLOPT_USERAGENT => 'Codular Sample cURL Request'
            ));
   $resp = curl_exec($curl);
   curl_close($curl);
}

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
