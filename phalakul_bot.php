<?php
include("template.php");
$API_URL = 'https://api.line.me/v2/bot/message';
$ACCESS_TOKEN = 'DbDJI21eID/MzvRJKEE97bA+5F2zQrx/V/JRC0N+hUKmOIsBLAc5kTMdw0lJgutrFYhZ7jj8HuTB4YMoPWvnb3P8n6Lbf67YdXiUXJDm1kAiOIVXMo1NXaUQ1kiKv8wxktZH1Sd6CWhUi0QxjhM9+AdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'a5975c29114c71eca67869c2933db9bd';
$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);
$request = file_get_contents('php://input');   // Get request content
$request_array = json_decode($request, true);   // Decode JSON to Array

if (sizeof($request_array['events']) > 0) {
    foreach ($request_array['events'] as $event) {
        $reply_message = '';
        $reply_token = $event['replyToken'];
        $text = $event['message']['text'];
        $getUid = $event['source']['userId'];
        //========================================== แสงสว่าง ==========================================//
        if ($text == 'Hi') {
            $data = [
                'replyToken' => $reply_token,
                'messages' => [['type' => 'text', 'text' => json_encode($request_array) ]]
            ];
         }
        //========================================== จบ แสงสว่าง ==========================================//

        if ($text == 'แอร์') { 
            $data = [
                'replyToken' => $reply_token,
                'messages' => [$js_set_time]
            ];
        }

        if ($text == 'ประตู') { }
        
        if ($text == 'สถานะ') {
            $data = [
                'replyToken' => $reply_token,
                'messages' => [$js_status]
            ];
        }

        if ($text == 'วิธีใช้') {
            $data = [
                'replyToken' => $reply_token,
                'messages' => [['type' => 'text', 'text' => 'ID ของคุณคือ '.$getUid]]
                //'messages' => [['type' => 'text', 'text' => json_encode($request_array) ]]
            ];
        }

        if ($text == 'แผงควบคุม') {
            $data = [
                'replyToken' => $reply_token,
                'messages' => [$js_liv]
            ];
        }

        if ($text == 'ล็อกประตู') {
            $data = [
                'replyToken' => $reply_token,
                'messages' => [['type' => 'text', 'text' => 'กำลังล็อกประตู']]
            ];
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => 'https://api.anto.io/channel/set/DL32Cs80BDqJwgimtX5oBIDTMOlAt8VUBPGElAA4/R_H_A_S/Door/1',
                CURLOPT_USERAGENT => 'Codular Sample cURL Request'
            ));
            $resp = curl_exec($curl);
            curl_close($curl);
        } elseif ($text == 'ปลดล็อกประตู') {
            $data = [
                'replyToken' => $reply_token,
                'messages' => [['type' => 'text', 'text' => 'กำลังปลดล็อกประตู']]
            ];
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => 'https://api.anto.io/channel/set/DL32Cs80BDqJwgimtX5oBIDTMOlAt8VUBPGElAA4/R_H_A_S/Door/0',
                CURLOPT_USERAGENT => 'Codular Sample cURL Request'
            ));
            $resp = curl_exec($curl);
            curl_close($curl);
        }

        //========================================== จบแสงสว่าง ==========================================//



        $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);
        $send_result = send_reply_message($API_URL . '/reply', $POST_HEADER, $post_body);
        echo "Result: " . $send_result . "\r\n";
    }
}

echo "ok";
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
