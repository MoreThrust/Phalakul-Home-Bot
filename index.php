<!-- ############### STATUS DOOR ############### -->
<?php
include("Status_door.php");

$accessToken = '04jXv6we9MYpqRctFYw7mNbBUIU0Wb22RVFrmfSaJup0Ii+Uf3INLI5FzsSdP1uysuqnv/YvY300eOcXdgPygsQJ/QPsY1CTHe9QAoR2E14pw346tN2johPVIVUMO3CaBx/7W9TkKsXdTFRqL2+UJgdB04t89/1O/w1cDnyilFU=';

$jsonString = file_get_contents('php://input');
error_log($jsonString);
$jsonObj = json_decode($jsonString);

$message = $jsonObj->{"events"}[0]->{"message"};
$replyToken = $jsonObj->{"events"}[0]->{"replyToken"};

if ($message->{"text"} == 'แสงสว่าง') {
    $messageData = [
        'type' => 'template',
        'altText' => '確認ダイアログ',
        'template' => [
            'type' => 'confirm',
            'text' => '元気ですかー？',
            'actions' => [
                [
                    'type' => 'message',
                    'label' => '元気です',
                    'text' => '元気です'
                ],
                [
                    'type' => 'message',
                    'label' => 'まあまあです',
                    'text' => 'まあまあです'
                ],
            ]
        ]
    ];
} elseif ($message->{"text"} == 'แอร์') {
    // ボタンタイプ
    $messageData = [
        'type' => 'template',
        'altText' => 'ボタン',
        'template' => [
            'type' => 'buttons',
            'title' => 'タイトルです',
            'text' => '選択してね',
            'actions' => [
                [
                    'type' => 'postback',
                    'label' => 'webhookにpost送信',
                    'data' => 'value'
                ],
                [
                    'type' => 'uri',
                    'label' => 'googleへ移動',
                    'uri' => 'https://google.com'
                ]
            ]
        ]
    ];
} elseif ($message->{"text"} == 'ประตู') {
    $messageData = [
        'type' => 'template',
        'altText' => 'สถานะประตู',
        'template' => [
            'type' => 'carousel',
            'columns' => [
                [
                    'title' => 'ประตูหน้า',
                    'text' => $st_front_door,
                    'actions' => [
                        [
                            'type' => 'message',
                            'label' => 'ล็อคประตู',
                            'text' => 'ล็อคประตู'
                        ],
                        [
                            'type' => 'message',
                            'label' => 'ปลดล็อคประตู',
                            'text' => 'ปลดล็อคประตู'
                        ]
                    ]
                ],
                [
                    'title' => 'ประตูหลัง',
                    'text' => $st_back_door,
                    'actions' => [
                        [
                            'type' => 'message',
                            'label' => 'ล็อคประตู',
                            'text' => 'ล็อคประตู'
                        ],
                        [
                            'type' => 'message',
                            'label' => 'ปลดล็อคประตู',
                            'text' => 'ปลดล็อคประตู'
                        ]
                    ]
                ],
                [
                    'title' => 'ประตูห้องประชุม 1',
                    'text' => $st_mtr1_door,
                    'actions' => [
                        [
                            'type' => 'postback',
                            'label' => 'ล็อคประตู',
                            'data' => 'cd1'
                        ],
                        [
                            'type' => 'postback',
                            'label' => 'ปลดล็อคประตู',
                            'data' => 'cd0'
                        ]
                    ]
                ],
            ]
        ]
    ];
} elseif($message->{"data"} == 'cd1') {
    $messageData = [
        'type' => 'text',
        'text' => "lock"
    ];
}elseif($message->{"data"} == 'cd0') {
    $messageData = [
        'type' => 'text',
        'text' => "unlock"
    ];
}

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

?>