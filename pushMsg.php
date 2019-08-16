<html>

<head>
   <META HTTP-EQUIV="Refresh" CONTENT="5;URL=https://www.thaicreate.com.com">
</head>

<body></body>

</html>
<?php
include("template.php");
include("Status.php");
$API_URL = 'https://api.line.me/v2/bot/message';
$ACCESS_TOKEN = '0o0ysAsM9n8ogghDWIpHI7Hes2cIhXyaES1Hu5QA1GoJFpoF3/oR3QHHO8CJ41G1XzU2HLh7fYPXFNfUF5vHnTMHfzvVvV5bmjY8sYQAMEr6dt3JE6A0Oz8Iync6wKjk+VO3OvdvsQSOu6TSu8liQwdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'af6aadbace7145526e4d024d7b605bb5';
$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);
$request = file_get_contents('php://input');   // Get request content
$request_array = json_decode($request, true);   // Decode JSON to Array

//========================================== Push message ==========================================//
$arrayHeader = array();
$arrayHeader[] = "Content-Type: application/json";
$arrayHeader[] = "Authorization: Bearer {$ACCESS_TOKEN}";
//========================================== End Push message ==========================================//

$kooID = "Ue124de79c1d8b06ae61ce5bf1039f52f";
if ($st_Voltage = "230") {
   $arrayPostData['to'] = $kooID;
   $arrayPostData['messages'][0]['type'] = "text";
   $arrayPostData['messages'][0]['text'] = "ดูเหมือนว่าระดับแรงดันไฟจะเกิน 230 | แรงดันที่วัดได้ = +".$st_Voltage;
   pushMsg($arrayHeader, $arrayPostData);
}

if ($st_Voltage = "232") {
   $arrayPostData['to'] = $kooID;
   $arrayPostData['messages'][0]['type'] = "text";
   $arrayPostData['messages'][0]['text'] = "ดูเหมือนว่าระดับแรงดันไฟจะเกิน 230 | แรงดันที่วัดได้ = +".$st_Voltage;
   $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);
   pushMsg($POST_HEADER, $post_body);
}

if ($st_Voltage > "234") {
   foreach ($request_array['events'] as $event) {
      $reply_message = '';
      $reply_token = $event['replyToken'];
      $text = $event['message']['text'];
      $data = [
         'replyToken' => $reply_token,
         'messages' => ["ดูเหมือนว่าระดับแรงดันไฟจะเกิน 230 | แรงดันที่วัดได้ = +".$st_Voltage]
      ];
      $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);
      $send_result = send_reply_message($API_URL . '/reply', $POST_HEADER, $post_body);
      echo "Result: " . $send_result . "\r\n";
   }
}


function send_reply_message($url, $post_header, $post_body)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function pushMsg($arrayHeader, $arrayPostData)
{
   $strUrl = "https://api.line.me/v2/bot/message/push";
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $strUrl);
   curl_setopt($ch, CURLOPT_HEADER, false);
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);
   curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrayPostData));
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   $result = curl_exec($ch);
   curl_close($ch);
}
