<?php
include("template.php");
$API_URL = 'https://api.line.me/v2/bot/message';
$ACCESS_TOKEN = '0o0ysAsM9n8ogghDWIpHI7Hes2cIhXyaES1Hu5QA1GoJFpoF3/oR3QHHO8CJ41G1XzU2HLh7fYPXFNfUF5vHnTMHfzvVvV5bmjY8sYQAMEr6dt3JE6A0Oz8Iync6wKjk+VO3OvdvsQSOu6TSu8liQwdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'af6aadbace7145526e4d024d7b605bb5';
$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);
$request = file_get_contents('php://input');   // Get request content
$request_array = json_decode($request, true);   // Decode JSON to Array

if (sizeof($request_array['events']) > 0) {
    foreach ($request_array['events'] as $event) {
        $reply_message = '';
        $reply_token = $event['replyToken'];
        $text = $event['message']['text'];

        //========================================== แสงสว่าง ==========================================//

        if ($text == 'แสงสว่าง') {
            $data = [
                'replyToken' => $reply_token,
                'messages' => [$js_tdpiup]
            ];
        }

        if ($text == 'สถานะ') {
            $data = [
                'replyToken' => $reply_token,
                'messages' => [$js_ST]
            ];
        }

        if ($text == 'แผงควบคุม') {
            $data = [
                'replyToken' => $reply_token,
                'messages' => [$js_tim]
            ];
        }

        if ($text == 'วิธีใช้') {
            $data = [
                'replyToken' => $reply_token,
                'messages' => [$jsonFlex]
            ];
        }

        if ($text == 'ประตู') {
            $actionBuilder = array(
                new MessageTemplateActionBuilder(
                    'Message Template', // ข้อความแสดงในปุ่ม
                    'This is Text' // ข้อความที่จะแสดงฝั่งผู้ใช้ เมื่อคลิกเลือก
                ),
                new UriTemplateActionBuilder(
                    'Uri Template', // ข้อความแสดงในปุ่ม
                    'https://www.ninenik.com'
                ),
                new DatetimePickerTemplateActionBuilder(
                    'Datetime Picker', // ข้อความแสดงในปุ่ม
                    http_build_query(array(
                        'action' => 'reservation',
                        'person' => 5
                    )), // ข้อมูลที่จะส่งไปใน webhook ผ่าน postback event
                    'datetime', // date | time | datetime รูปแบบข้อมูลที่จะส่ง ในที่นี้ใช้ datatime
                    substr_replace(date("Y-m-d H:i"), 'T', 10, 1), // วันที่ เวลา ค่าเริ่มต้นที่ถูกเลือก
                    substr_replace(date("Y-m-d H:i", strtotime("+5 day")), 'T', 10, 1), //วันที่ เวลา มากสุดที่เลือกได้
                    substr_replace(date("Y-m-d H:i"), 'T', 10, 1) //วันที่ เวลา น้อยสุดที่เลือกได้
                ),
                new PostbackTemplateActionBuilder(
                    'Postback', // ข้อความแสดงในปุ่ม
                    http_build_query(array(
                        'action' => 'buy',
                        'item' => 100
                    )), // ข้อมูลที่จะส่งไปใน webhook ผ่าน postback event
                    'Postback Text'  // ข้อความที่จะแสดงฝั่งผู้ใช้ เมื่อคลิกเลือก
                ),
            );
            $imageUrl = 'https://www.mywebsite.com/imgsrc/photos/w/simpleflower';
            $replyData = new TemplateMessageBuilder(
                'Button Template',
                new ButtonTemplateBuilder(
                    'button template builder', // กำหนดหัวเรื่อง
                    'Please select', // กำหนดรายละเอียด
                    $imageUrl, // กำหนด url รุปภาพ
                    $actionBuilder  // กำหนด action object
                )
            );
        }
        //========================================== จบแสงสว่าง ==========================================//



        $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);
        $send_result = send_reply_message($API_URL . '/reply', $POST_HEADER, $post_body);
        echo "Result: " . $send_result . "\r\n";
    }
}

echo "Last update 12/8/2562";
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
