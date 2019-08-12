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

        $js = [
            "type"=> "flex",
            "altText"=> "Flex Message",
            "contents"=> [
              "type"=> "bubble",
              "hero"=> [
                "type"=> "image",
                "url"=> "https=>//scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png",
                "size"=> "full",
                "aspectRatio"=> "20=>13",
                "aspectMode"=> "cover",
                "action"=> [
                  "type"=> "uri",
                  "label"=> "Line",
                  "uri"=> "https=>//linecorp.com/"
                ]
              ],
              "body"=> [
                "type"=> "box",
                "layout"=> "vertical",
                "contents"=> [
                  [
                    "type"=> "text",
                    "text"=> "สถานะ",
                    "size"=> "xl",
                    "weight"=> "bold"
                  ],
                  [
                    "type"=> "box",
                    "layout"=> "vertical",
                    "spacing"=> "sm",
                    "margin"=> "lg",
                    "contents"=> [
                      [
                        "type"=> "box",
                        "layout"=> "horizontal",
                        "spacing"=> "sm",
                        "contents"=> [
                          [
                            "type"=> "text",
                            "text"=> "ระดับไฟฟ้า",
                            "flex"=> 1,
                            "size"=> "sm",
                            "weight"=> "bold"
                          ],
                          [
                            "type"=> "text",
                            "text"=> "223V",
                            "flex"=> 2,
                            "size"=> "sm",
                            "gravity"=> "center",
                            "color"=> "#666666",
                            "wrap"=> true
                          ]
                        ]
                      ],
                      [
                        "type"=> "box",
                        "layout"=> "horizontal",
                        "spacing"=> "sm",
                        "contents"=> [
                          [
                            "type"=> "text",
                            "text"=> "เปลวไฟ",
                            "flex"=> 1,
                            "size"=> "sm",
                            "weight"=> "bold"
                          ],
                          [
                            "type"=> "text",
                            "text"=> "ปกติ",
                            "flex"=> 2,
                            "size"=> "sm",
                            "color"=> "#666666",
                            "wrap"=> true
                          ]
                        ]
                      ],
                      [
                        "type"=> "box",
                        "layout"=> "horizontal",
                        "contents"=> [
                          [
                            "type"=> "text",
                            "text"=> "อุณหภูมิ",
                            "weight"=> "bold"
                          ],
                          [
                            "type"=> "text",
                            "text"=> "29.7 °C",
                            "flex"=> 2
                          ]
                        ]
                      ]
                    ]
                  ]
                ]
              ],
              "footer"=> [
                "type"=> "box",
                "layout"=> "vertical",
                "flex"=> 0,
                "spacing"=> "sm",
                "contents"=> [
                  [
                    "type"=> "separator"
                  ],
                  [
                    "type"=> "button",
                    "action"=> [
                      "type"=> "message",
                      "label"=> "เปิดแผงควบคุม",
                      "text"=> "แผงควบคุม"
                    ],
                    "height"=> "sm",
                    "style"=> "link",
                    "gravity"=> "center"
                  ],
                  [
                    "type"=> "separator"
                  ],
                  [
                    "type"=> "button",
                    "action"=> [
                      "type"=> "message",
                      "label"=> "เช็คสถานะอีกครั้ง",
                      "text"=> "สถานะ"
                    ],
                    "height"=> "sm",
                    "style"=> "link"
                  ],
                  [
                    "type"=> "separator"
                  ]
                ]
              ]
            ]
          ];
          $js_status3 = ["type"=> "flex","altText"=> "Flex Message","contents"=> ["type"=> "bubble","hero"=> ["type"=> "image","url"=> "https=>//scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png","size"=> "full","aspectRatio"=> "20=>13","aspectMode"=> "cover","action"=> ["type"=> "uri","label"=> "Line","uri"=> "https=>//linecorp.com/"]],"body"=> ["type"=> "box","layout"=> "vertical","contents"=> [["type"=> "text","text"=> "สถานะ","size"=> "xl","weight"=> "bold"],["type"=> "box","layout"=> "vertical","spacing"=> "sm","margin"=> "lg","contents"=> [["type"=> "box","layout"=> "horizontal","spacing"=> "sm","contents"=> [["type"=> "text","text"=> "ระดับไฟฟ้า","flex"=> 1,"size"=> "sm","weight"=> "bold"],["type"=> "text","text"=> "223V","flex"=> 2,"size"=> "sm","gravity"=> "center","color"=> "#666666","wrap"=> true]]],["type"=> "box","layout"=> "horizontal","spacing"=> "sm","contents"=> [["type"=> "text","text"=> "เปลวไฟ","flex"=> 1,"size"=> "sm","weight"=> "bold"],["type"=> "text","text"=> "ปกติ","flex"=> 2,"size"=> "sm","color"=> "#666666","wrap"=> true]]],["type"=> "box","layout"=> "horizontal","contents"=> [["type"=> "text","text"=> "อุณหภูมิ","weight"=> "bold"],["type"=> "text","text"=> "29.7 °C","flex"=> 2]]]]]]],"footer"=> ["type"=> "box","layout"=> "vertical","flex"=> 0,"spacing"=> "sm","contents"=> [["type"=> "separator"],["type"=> "button","action"=> ["type"=> "message","label"=> "เปิดแผงควบคุม","text"=> "แผงควบคุม"],"height"=> "sm","style"=> "link","gravity"=> "center"],["type"=> "separator"],["type"=> "button","action"=> ["type"=> "message","label"=> "เช็คสถานะอีกครั้ง","text"=> "สถานะ"],"height"=> "sm","style"=> "link"],["type"=> "separator"]]]]];

          $jsonFlex = [
            "type" => "flex",
            "altText" => "Hello Flex Message",
            "contents" => [
              "type" => "bubble",
              "direction" => "ltr",
              "header" => [
                "type" => "box",
                "layout" => "vertical",
                "contents" => [
                  [
                    "type" => "text",
                    "text" => "Purchase",
                    "size" => "lg",
                    "align" => "start",
                    "weight" => "bold",
                    "color" => "#009813"
                  ],
                  [
                    "type" => "text",
                    "text" => "฿ 100.00",
                    "size" => "3xl",
                    "weight" => "bold",
                    "color" => "#000000"
                  ],
                  [
                    "type" => "text",
                    "text" => "Rabbit Line Pay",
                    "size" => "lg",
                    "weight" => "bold",
                    "color" => "#000000"
                  ],
                  [
                    "type" => "text",
                    "text" => "2019.02.14 21:47 (GMT+0700)",
                    "size" => "xs",
                    "color" => "#B2B2B2"
                  ],
                  [
                    "type" => "text",
                    "text" => "Payment complete.",
                    "margin" => "lg",
                    "size" => "lg",
                    "color" => "#000000"
                  ]
                ]
              ],
              "body" => [
                "type" => "box",
                "layout" => "vertical",
                "contents" => [
                  [
                    "type" => "separator",
                    "color" => "#C3C3C3"
                  ],
                  [
                    "type" => "box",
                    "layout" => "baseline",
                    "margin" => "lg",
                    "contents" => [
                      [
                        "type" => "text",
                        "text" => "Merchant",
                        "align" => "start",
                        "color" => "#C3C3C3"
                      ],
                      [
                        "type" => "text",
                        "text" => "BTS 01",
                        "align" => "end",
                        "color" => "#000000"
                      ]
                    ]
                  ],
                  [
                    "type" => "box",
                    "layout" => "baseline",
                    "margin" => "lg",
                    "contents" => [
                      [
                        "type" => "text",
                        "text" => "New balance",
                        "color" => "#C3C3C3"
                      ],
                      [
                        "type" => "text",
                        "text" => "฿ 45.57",
                        "align" => "end"
                      ]
                    ]
                  ],
                  [
                    "type" => "separator",
                    "margin" => "lg",
                    "color" => "#C3C3C3"
                  ]
                ]
              ],
              "footer" => [
                "type" => "box",
                "layout" => "horizontal",
                "contents" => [
                  [
                    "type" => "text",
                    "text" => "View Details",
                    "size" => "lg",
                    "align" => "start",
                    "color" => "#0084B6",
                    "action" => [
                      "type" => "uri",
                      "label" => "View Details",
                      "uri" => "https://google.co.th/"
                    ]
                  ]
                ]
              ]
            ]
          ];

        if ($text == 'สถานะ') {
            $data = [
                'replyToken' => $reply_token,
                'messages' => [$jsonFlex]
            ];
        }

        if ($text == 'แสงสว่าง') {
            $data = [
                'replyToken' => $reply_token,
                'messages' => [$js_status1]
            ];
        }
        //========================================== จบแสงสว่าง ==========================================//

        if ($text == 'วิธีใช้') {
            $data = [
                'replyToken' => $reply_token,
                'messages' => [$js_status2]
            ];
        }

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
