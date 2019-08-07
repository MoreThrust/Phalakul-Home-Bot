<?php
include("Status.php");
//include("set_anto.php");

$accessToken = '0o0ysAsM9n8ogghDWIpHI7Hes2cIhXyaES1Hu5QA1GoJFpoF3/oR3QHHO8CJ41G1XzU2HLh7fYPXFNfUF5vHnTMHfzvVvV5bmjY8sYQAMEr6dt3JE6A0Oz8Iync6wKjk+VO3OvdvsQSOu6TSu8liQwdB04t89/1O/w1cDnyilFU=';

$jsonString = file_get_contents('php://input');
error_log($jsonString);
$jsonObj = json_decode($jsonString);
$set_front_door = "";
$message = $jsonObj->{"events"}[0]->{"message"};
$replyToken = $jsonObj->{"events"}[0]->{"replyToken"};

// ####################################### วิธีใช้ ###################################### //

if ($message->{"text"} == 'วิธีใช้') {
    $messageData = [
        'type' => 'template',
        'altText' => 'วิธีใช้งาน',
        'template' => [
            'type' => 'buttons',
            'title' => 'วิธีใช้งาน',
            'text' => 'เลือกเมนูด้านล่างตามที่ต้องการ',
            'actions' => [
                [
                    'type' => 'message',
                    'label' => 'แผงควบคุม',
                    'text' => 'แผงควบคุม'
                ],
                [
                    'type' => 'message',
                    'label' => 'เช็คสถานะ',
                    'text' => 'เช็คสถานะ'
                ]
            ]
        ]
    ];
}

// ####################################### จบวิธีใช้ ###################################### //

// ####################################### แผงควบคุม ###################################### //

if ($message->{"text"} == 'วิธีใช้') {
    $messageData = [
        'type' => 'template',
        'altText' => 'วิธีใช้งาน',
        'template' => [
            'type' => 'buttons',
            'title' => 'วิธีใช้งาน',
            'text' => 'เลือกเมนูด้านล่างตามที่ต้องการ',
            'actions' => [
                [
                    'type' => 'message',
                    'label' => 'แผงควบคุม',
                    'text' => 'แผงควบคุม'
                ],
                [
                    'type' => 'message',
                    'label' => 'เช็คสถานะ',
                    'text' => 'เช็คสถานะ'
                ]
            ]
        ]
    ];
}

// ####################################### จบแผงควบคุม ###################################### //

// ####################################### Lamp ###################################### //

if ($message->{"text"} == 'แสงสว่าง') {
    $messageData = [

        'type' => 'flex',
        'altText' => 'Flex Message',
        'contents' => [
            'type' => 'bubble',
            'header' => [
                'type' => 'box',
                'layout' => 'horizontal',
                'contents' => [
                    [
                        'type' => 'text',
                        'text' => 'NEWS DIGEST',
                        'size' => 'sm',
                        'weight' => 'bold',
                        'color' => '#AAAAAA'
                    ]
                ]
            ],
            'hero' => [
                'type' => 'image',
                'url' => 'https=>//scdn.line-apps.com/n/channel_devcenter/img/fx/01_4_news.png',
                'size' => 'full',
                'aspectRatio' => '20=>13',
                'aspectMode' => 'cover',
                'action' => [
                    'type' => 'uri',
                    'label' => 'Action',
                    'uri' => 'https=>//linecorp.com/'
                ]
            ],
            'body' => [
                'type' => 'box',
                'layout' => 'horizontal',
                'spacing' => 'md',
                'contents' => [
                    [
                        'type' => 'box',
                        'layout' => 'vertical',
                        'flex' => 2,
                        'contents' => [
                            [
                                'type' => 'text',
                                'text' => '7 Things to Know for Today',
                                'flex' => 1,
                                'size' => 'xs',
                                'gravity' => 'top'
                            ],
                            [
                                'type' => 'separator'
                            ]
                        ]
                    ]
                ]
            ]
        ]

    ];
}


// ==================== Set RT ==================== //
elseif ($message->{"text"} == 'แสงสว่างห้องรับแขก') {
    $messageData = [
        "type" => "template",
        "altText" => "แสงสว่างห้องรับแขก",
        "template" => [
            "type" => "confirm",
            "text" => $st_lamp_rt,
            "actions" => [
                [
                    "type" => "message",
                    "label" => "เปิดไฟ",
                    "text" => "เปิดไฟห้องรับแขก"
                ],
                [
                    "type" => "message",
                    "label" => "ปิดไฟ",
                    "text" => "ปิดไฟห้องรับแขก"
                ]
            ]
        ]
    ];
} elseif ($message->{"text"} == 'เปิดไฟห้องรับแขก') {
    $messageData = [
        'type' => 'text',
        'text' => "เปิดไฟห้องรับแขกเรียบร้อยแล้ว 􀄃􀉕ok hand􏿿"
    ];
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://api.anto.io/channel/set/4GZewdAlDhxWz6ijHnvDSh73Q9rxeOjYNx0SLRgl/Smart_Office/lamp_reception_room/1',
        CURLOPT_USERAGENT => 'Codular Sample cURL Request'
    ));
    $resp = curl_exec($curl);
    curl_close($curl);
} elseif ($message->{"text"} == 'ปิดไฟห้องรับแขก') {
    $messageData = [
        'type' => 'text',
        'text' => "ปิดไฟห้องรับแขกเรียบร้อยแล้ว 􀄃􀉕ok hand􏿿"
    ];
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://api.anto.io/channel/set/4GZewdAlDhxWz6ijHnvDSh73Q9rxeOjYNx0SLRgl/Smart_Office/lamp_reception_room/0',
        CURLOPT_USERAGENT => 'Codular Sample cURL Request'
    ));
    $resp = curl_exec($curl);
    curl_close($curl);
}


// ####################################### End Lamp ###################################### //

// ####################################### Status ###################################### //

if ($message->{"text"} == 'สถานะ') {
    $messageData = [
        "type" => "text",
        "text" => "􀔃􀄒novice􏿿 สถานะโดยรวม\n􁤁􀆅energy saving bulb􏿿 สถานะอุปกรณ์\n- " . $st_lamp_rt . $st_lamp_rt2 . "\n- " . $st_lamp_ws . $st_lamp_ws2 . "\n- " . $st_lamp_mt . $st_lamp_mt2 . "\n\n
        􀌂􀇨snowy􏿿 เครื่องทำความเย็น\n- " . $st_air_rt . $st_air_rt2 . "\n- " . $st_air_ws . $st_air_ws2 . "\n- " . $st_air_mt . $st_air_mt2 . "\n\n
        􁤁􀆣อุณหภูมิ􏿿 อุณหภูมิห้อง\n- " . $temp_air_rt . $temp_air_rt2 . "\n- " . $temp_air_ws . $temp_air_ws2 . "\n- " . $temp_air_mt . $temp_air_mt2 . "\n\n
        􀐂􀇚กุญแจ􏿿 ระบบความปลอดภัย\n- " . $st_door_et . $st_door_et2 . "\n- " . $st_door_ws . $st_door_ws2 . "\n- " . $st_door_mt . $st_door_mt2 . "\n"
    ];
}



// ####################################### End Status ###################################### //

$response = [
    'replyToken' => $replyToken,
    'messages' => [$messageData]
];
error_log(json_encode($response));

$ch = curl_init('https://api.line.me/v2/bot/message/reply');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($response));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json; charser=UTF-8',
    'Authorization: Bearer ' . $accessToken
));
$result = curl_exec($ch);
error_log($result);
curl_close($ch);
