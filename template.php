<?php
include("Status.php");
date_default_timezone_set('Asia/Bangkok');
$dateNow = date('Y-m-d');
$timeNow = date('H:i');
$dt = date('เมื่อวันที่ d/m/Y เวลา H:i:s น.');
echo $dt;

// TEST
$jsonFlex = ["type" => "flex", "altText" => "Hello Flex Message", "contents" => ["type" => "bubble", "direction" => "ltr", "header" => ["type" => "box", "layout" => "vertical", "contents" => [["type" => "text", "text" => "Purchase", "size" => "lg", "align" => "start", "weight" => "bold", "color" => "#009813"], ["type" => "text", "text" => "฿ 100.15", "size" => "3xl", "weight" => "bold", "color" => "#000000"], ["type" => "text", "text" => "Rabbit Line Pay", "size" => "lg", "weight" => "bold", "color" => "#000000"], ["type" => "text", "text" => "2019.02.14 21:47 (GMT+0700)", "size" => "xs", "color" => "#B2B2B2"], ["type" => "text", "text" => "Payment complete.", "margin" => "lg", "size" => "lg", "color" => "#000000"]]], "body" => ["type" => "box", "layout" => "vertical", "contents" => [["type" => "separator", "color" => "#C3C3C3"], ["type" => "box", "layout" => "baseline", "margin" => "lg", "contents" => [["type" => "text", "text" => "Merchant", "align" => "start", "color" => "#C3C3C3"], ["type" => "text", "text" => "BTS 01", "align" => "end", "color" => "#000000"]]], ["type" => "box", "layout" => "baseline", "margin" => "lg", "contents" => [["type" => "text", "text" => "New balance", "color" => "#C3C3C3"], ["type" => "text", "text" => "฿ 45.57", "align" => "end"]]], ["type" => "separator", "margin" => "lg", "color" => "#C3C3C3"]]], "footer" => ["type" => "box", "layout" => "horizontal", "contents" => [["type" => "text", "text" => "View Details", "size" => "lg", "align" => "start", "color" => "#0084B6", "action" => ["type" => "uri", "label" => "View Details", "uri" => "https://google.co.th/"]]]]]];

// สถานะ
//$js_ST = [["type" => "flex", "altText" => "Flex Message", "contents" => ["type" => "bubble", "direction" => "ltr", "hero" => ["type" => "image", "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png", "size" => "full", "aspectRatio" => "20:13", "aspectMode" => "cover"], "body" => ["type" => "box", "layout" => "vertical", "contents" => [["type" => "text", "text" => "สถานะปัจจุบัน", "size" => "xl", "weight" => "bold"], ["type" => "box", "layout" => "horizontal", "spacing" => "xs", "margin" => "lg", "contents" => [["type" => "box", "layout" => "vertical", "flex" => 2, "contents" => [["type" => "text", "text" => "แรงดันไฟฟ้า", "size" => "lg"], ["type" => "text", "text" => "เปลวไฟ", "size" => "lg"], ["type" => "text", "text" => "อุณหภูมิ", "size" => "lg"], ["type" => "text", "text" => "ความชื้น", "size" => "lg"]]], ["type" => "box", "layout" => "vertical", "flex" => 2, "contents" => [["type" => "text", "text" => "223v", "size" => "lg", "weight" => "bold"], ["type" => "text", "text" => "ไม่พบ", "size" => "lg", "weight" => "bold"], ["type" => "text", "text" => "29.7°C", "size" => "lg", "weight" => "bold"], ["type" => "text", "text" => "45%", "size" => "lg", "weight" => "bold"]]]]]]], "footer" => ["type" => "box", "layout" => "vertical", "flex" => 0, "spacing" => "sm", "contents" => [["type" => "separator"], ["type" => "button", "action" => ["type" => "message", "label" => "เปิดแผงควบคุม", "text" => "แผงควบคุม"], "height" => "sm"], ["type" => "separator"], ["type" => "button", "action" => ["type" => "message", "label" => "เช็คสถานะอีกครั้ง", "text" => "สถานะ"], "height" => "sm"], ["type" => "separator"], ["type" => "text", "text" => "เมื่อวันที่ 22/02/62 เวลา 20:30น.", "margin" => "xxl", "size" => "xxs", "align" => "center", "gravity" => "bottom"]]]]]];

$js_ST = [
    
  "type" => "flex",
  "altText" => "Flex Message",
  "contents" => [
    "type" => "bubble",
    "direction" => "ltr",
    "hero" => [
      "type" => "image",
      "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png",
      "size" => "full",
      "aspectRatio" => "20:13",
      "aspectMode" => "cover"
    ],
    "body" => [
      "type" => "box",
      "layout" => "vertical",
      "contents" => [
        [
          "type" => "text",
          "text" => "สถานะปัจจุบัน",
          "size" => "xl",
          "weight" => "bold"
        ],
        [
          "type" => "box",
          "layout" => "horizontal",
          "spacing" => "xs",
          "margin" => "lg",
          "contents" => [
            [
              "type" => "box",
              "layout" => "vertical",
              "flex" => 2,
              "contents" => [
                [
                  "type" => "text",
                  "text" => "แรงดันไฟฟ้า",
                  "size" => "lg"
                ],
                [
                  "type" => "text",
                  "text" => "อุณหภูมิ",
                  "size" => "lg"
                ],
                [
                  "type" => "text",
                  "text" => "ความชื้น",
                  "size" => "lg"
                ],
                [
                  "type" => "text",
                  "text" => "ฝน",
                  "size" => "lg"
                ],
                [
                  "type" => "text",
                  "text" => "ประตูบ้าน",
                  "size" => "lg"
                ]
              ]
            ],
            [
              "type" => "box",
              "layout" => "vertical",
              "flex" => 2,
              "contents" => [
                [
                  "type" => "text",
                  "text" => $st_Voltage,
                  "size" => "lg",
                  "weight" => "bold",
                  "color" => "#E67E22"
                ],
                [
                  "type" => "text",
                  "text" => "29.7°C",
                  "size" => "lg",
                  "weight" => "bold",
                  "color" => "#3867D6"
                ],
                [
                  "type" => "text",
                  "text" => "45%",
                  "size" => "lg",
                  "weight" => "bold",
                  "color" => "#3867D6"
                ],
                [
                  "type" => "text",
                  "text" => "ไม่มีฝน",
                  "size" => "lg",
                  "weight" => "bold",
                  "color" => "#0FB9B1"
                ],
                [
                  "type" => "text",
                  "text" => "ยังไม่ได้ล็อก",
                  "size" => "lg",
                  "weight" => "bold",
                  "color" => "#EB3B5A"
                ]
              ]
            ]
          ]
        ]
      ]
    ],
    "footer" => [
      "type" => "box",
      "layout" => "vertical",
      "flex" => 0,
      "spacing" => "sm",
      "contents" => [
        [
          "type" => "button",
          "action" => [
            "type" => "message",
            "label" => "เปิดแผงควบคุม",
            "text" => "แผงควบคุม"
          ],
          "color" => "#2980B9",
          "height" => "md",
          "style" => "primary"
        ],
        [
          "type" => "button",
          "action" => [
            "type" => "message",
            "label" => "เช็คสถานะอีกครั้ง",
            "text" => "สถานะ"
          ],
          "color" => "#F39C12",
          "margin" => "md",
          "height" => "md",
          "style" => "primary"
        ],
        [
          "type" => "separator",
          "margin" => "xl"
        ],
        [
          "type" => "text",
          "text" => $dt,
          "margin" => "lg",
          "size" => "xxs",
          "align" => "center",
          "gravity" => "center"
        ]
      ]
    ]
  ]

];
/*
$js_ST = [
    "type" => "flex",
    "altText" => "Flex Message",
    "contents" => [
        "type" => "bubble",
        "direction" => "ltr",
        "hero" => [
            "type" => "image",
            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png",
            "size" => "full",
            "aspectRatio" => "20:13",
            "aspectMode" => "cover"
        ],
        "body" => [
            "type" => "box",
            "layout" => "vertical",
            "contents" => [
                [
                    "type" => "text",
                    "text" => "สถานะปัจจุบัน",
                    "size" => "xl",
                    "weight" => "bold"
                ],
                [
                    "type" => "box",
                    "layout" => "horizontal",
                    "spacing" => "xs",
                    "margin" => "lg",
                    "contents" => [
                        [
                            "type" => "box",
                            "layout" => "vertical",
                            "flex" => 2,
                            "contents" => [
                                [
                                    "type" => "text",
                                    "text" => "แรงดันไฟฟ้า",
                                    "size" => "lg"
                                ],
                                [
                                    "type" => "text",
                                    "text" => "เปลวไฟ",
                                    "size" => "lg"
                                ],
                                [
                                    "type" => "text",
                                    "text" => "อุณหภูมิ",
                                    "size" => "lg"
                                ],
                                [
                                    "type" => "text",
                                    "text" => "ความชื้น",
                                    "size" => "lg"
                                ]
                            ]
                        ],
                        [
                            "type" => "box",
                            "layout" => "vertical",
                            "flex" => 2,
                            "contents" => [
                                [
                                    "type" => "text",
                                    "text" => "223.4v",
                                    "size" => "lg",
                                    "weight" => "bold",
                                    "color" => "#F1C40F"
                                ],
                                [
                                    "type" => "text",
                                    "text" => "ไม่พบ",
                                    "size" => "lg",
                                    "weight" => "bold",
                                    "color" => "#2ECC71"
                                ],
                                [
                                    "type" => "text",
                                    "text" => "29.7°C",
                                    "size" => "lg",
                                    "weight" => "bold",
                                    "color" => "#1ABC9C"
                                ],
                                [
                                    "type" => "text",
                                    "text" => "45.5%",
                                    "size" => "lg",
                                    "weight" => "bold",
                                    "color" => "#3498DB"
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        "footer" => [
            "type" => "box",
            "layout" => "vertical",
            "flex" => 0,
            "spacing" => "sm",
            "contents" => [
                [
                    "type" => "button",
                    "action" => [
                        "type" => "message",
                        "label" => "เปิดแผงควบคุม",
                        "text" => "แผงควบคุม"
                    ],
                    "color" => "#127CD4",
                    "height" => "md",
                    "style" => "primary"
                ],
                [
                    "type" => "button",
                    "action" => [
                        "type" => "message",
                        "label" => "เช็คสถานะอีกครั้ง",
                        "text" => "สถานะ"
                    ],
                    "color" => "#F6A506",
                    "margin" => "md",
                    "height" => "md",
                    "style" => "primary"
                ],
                [
                    "type" => "separator",
                    "margin" => "xl"
                ],
                [
                    "type" => "text",
                    "text" => $dt,
                    "margin" => "lg",
                    "size" => "xxs",
                    "align" => "center",
                    "gravity" => "center"
                ]
            ]
        ]
    ]
];

*/


$js_tim = [
    "type" => "template",
    "altText" => "this is a buttons template",
    "template" => [
        "type" => "buttons",
        "actions" => [
            [
                "type" => "datetimepicker",
                "label" => "เลือกวันที่",
                "data" => "ข้อมูล 1",
                "mode" => "date",
                "initial" => $dateNow,
                "max" => "2022-08-12",
                "min" => "2019-08-11"
            ],
            [
                "type" => "datetimepicker",
                "label" => "เลือกเวลา",
                "data" => "ข้อมูล 2",
                "mode" => "time",
                "initial" => $timeNow,
                "max" => "23:22",
                "min" => "00:00"
            ]
        ],
        "title" => "ตั้งเวลา",
        "text" => "เลือกเวลาและวันที่"
    ]
];

$js_tdpiup = [
    "type" => "template",
    "altText" => "this is a buttons template",
    "template" => [
      "type" => "buttons",
      "actions" => [
        [
          "type" => "datetimepicker",
          "label" => "เลือกวันและเวลา",
          "data" => "storeId=12345",
          "mode" => "datetime",
          //"initial" => "2019-08-13T14:08",
          //"max" => "2020-08-13T14:08",
          //"min" => "2018-08-13T14:08"
        ]
      ],
      "title" => "ตั้งเวลา",
      "text" => "เลือกวันและเวลา"
    ]
];