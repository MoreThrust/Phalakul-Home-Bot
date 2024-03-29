<?php
include("Status.php");
date_default_timezone_set('Asia/Bangkok');
$dateNow = date('Y-m-d');
$timeNow = date('H:i');
$dt = date('เมื่อวันที่ d/m/Y เวลา H:i:s น.');
echo $dt;

$js_wr_login = [
    "type" => "template",
    "altText" => "แจ้งเตือน!!!",
    "template" => [
      "type" => "buttons",
      "actions" => [
        [
          "type" => "message",
          "label" => "ดูภาพปัจจุบัน",
          "text" => "ดูภาพปัจจุบัน"
        ]
      ],
      "thumbnailImageUrl" => 'https://raw.githubusercontent.com/MoreThrust/SMART-OFFICE-LINE-BOT-MTLAB/master/ptest.jpg',
      "title" => "แจ้งเตือน!!",
      "text" => "คุณ \$name ได้ปลดล็อคประตูบ้าน \n$dt"
    ]
];

// TEST
$jsonFlex = [
    "type" => "image",
  "originalContentUrl" => "https://d.line-scdn.net/stf/line-lp/1200x630.png",
  "previewImageUrl" => "https://d.line-scdn.net/stf/line-lp/1200x630.png",
  "animated" => true
];

// สถานะ
//$js_ST = [["type" => "flex", "altText" => "Flex Message", "contents" => ["type" => "bubble", "direction" => "ltr", "hero" => ["type" => "image", "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png", "size" => "full", "aspectRatio" => "20:13", "aspectMode" => "cover"], "body" => ["type" => "box", "layout" => "vertical", "contents" => [["type" => "text", "text" => "สถานะปัจจุบัน", "size" => "xl", "weight" => "bold"], ["type" => "box", "layout" => "horizontal", "spacing" => "xs", "margin" => "lg", "contents" => [["type" => "box", "layout" => "vertical", "flex" => 2, "contents" => [["type" => "text", "text" => "แรงดันไฟฟ้า", "size" => "lg"], ["type" => "text", "text" => "เปลวไฟ", "size" => "lg"], ["type" => "text", "text" => "อุณหภูมิ", "size" => "lg"], ["type" => "text", "text" => "ความชื้น", "size" => "lg"]]], ["type" => "box", "layout" => "vertical", "flex" => 2, "contents" => [["type" => "text", "text" => "223v", "size" => "lg", "weight" => "bold"], ["type" => "text", "text" => "ไม่พบ", "size" => "lg", "weight" => "bold"], ["type" => "text", "text" => "29.7°C", "size" => "lg", "weight" => "bold"], ["type" => "text", "text" => "45%", "size" => "lg", "weight" => "bold"]]]]]]], "footer" => ["type" => "box", "layout" => "vertical", "flex" => 0, "spacing" => "sm", "contents" => [["type" => "separator"], ["type" => "button", "action" => ["type" => "message", "label" => "เปิดแผงควบคุม", "text" => "แผงควบคุม"], "height" => "sm"], ["type" => "separator"], ["type" => "button", "action" => ["type" => "message", "label" => "เช็คสถานะอีกครั้ง", "text" => "สถานะ"], "height" => "sm"], ["type" => "separator"], ["type" => "text", "text" => "เมื่อวันที่ 22/02/62 เวลา 20:30น.", "margin" => "xxl", "size" => "xxs", "align" => "center", "gravity" => "bottom"]]]]]];

$js_ST = [
    "type" => "flex",
    "altText" => "สถานะปัจจุบัน",
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
                    "layout" => "vertical",
                    "spacing" => "sm",
                    "margin" => "lg",
                    "contents" => [
                        [
                            "type" => "text",
                            "text" => "ห้องนั่งเล่น",
                            "size" => "lg",
                            "weight" => "bold"
                        ],
                        [
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => [
                                [
                                    "type" => "box",
                                    "layout" => "vertical",
                                    "flex" => 2,
                                    "contents" => [
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
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => "เปิดอยู่",
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
                                            "text" => $st_living_temp."°C",
                                            "size" => "lg",
                                            "weight" => "bold",
                                            "color" => "#3867D6"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $st_living_humi."%",
                                            "size" => "lg",
                                            "weight" => "bold",
                                            "color" => "#3867D6"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $st_rain,
                                            "size" => "lg",
                                            "weight" => "bold",
                                            "color" => "#0FB9B1"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $st_door,
                                            "size" => "lg",
                                            "weight" => "bold",
                                            "color" => $st_door_c
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $st_living_lamp,
                                            "size" => "lg",
                                            "weight" => "bold",
                                            "color" => $st_living_lamp_c
                                        ]
                                    ]
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




$js_CP = [

    "type" => "flex",
    "altText" => "Flex Message",
    "contents" => [
        "type" => "carousel",
        "contents" => [
            [
                "type" => "bubble",
                "hero" => [
                    "type" => "image",
                    "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/02_1_news_thumbnail_1.png",
                    "size" => "full",
                    "aspectRatio" => "20:13",
                    "aspectMode" => "cover"
                ],
                "body" => [
                    "type" => "box",
                    "layout" => "vertical",
                    "spacing" => "sm",
                    "contents" => [
                        [
                            "type" => "text",
                            "text" => "บริเวณบ้าน",
                            "size" => "xl",
                            "weight" => "bold"
                        ],
                        [
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => [
                                [
                                    "type" => "box",
                                    "layout" => "vertical",
                                    "contents" => [
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
                                            "text" => "ประตู",
                                            "size" => "lg"
                                        ]
                                    ]
                                ],
                                [
                                    "type" => "box",
                                    "layout" => "vertical",
                                    "contents" => [
                                        [
                                            "type" => "text",
                                            "text" => "30.1°C",
                                            "size" => "lg",
                                            "weight" => "bold"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => "24%",
                                            "size" => "lg",
                                            "weight" => "bold"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $st_door,
                                            "size" => "lg",
                                            "weight" => "bold",
                                            "color" => $st_door_c
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
                    "spacing" => "sm",
                    "contents" => [
                        [
                            "type" => "button",
                            "action" => [
                                "type" => "message",
                                "label" => "ล็อกประตู",
                                "text" => "ล็อกประตู"
                            ],
                            "style" => "primary"
                        ],
                        [
                            "type" => "button",
                            "action" => [
                                "type" => "message",
                                "label" => "ปลดล็อกประตู",
                                "text" => "ปลดล็อกประตู"
                            ],
                            "color" => "#EC6262",
                            "style" => "primary"
                        ],
                        [
                            "type" => "button",
                            "action" => [
                                "type" => "message",
                                "label" => "เช็คสถานะอีกครั้ง",
                                "text" => "แผงควบคุม"
                            ],
                            "color" => "#F39C12",
                            "style" => "primary"
                        ]
                    ]
                ]
            ],
            [
                "type" => "bubble",
                "hero" => [
                    "type" => "image",
                    "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_5_carousel.png",
                    "size" => "full",
                    "aspectRatio" => "20:13",
                    "aspectMode" => "cover"
                ],
                "body" => [
                    "type" => "box",
                    "layout" => "vertical",
                    "spacing" => "sm",
                    "contents" => [
                        [
                            "type" => "text",
                            "text" => "ห้องนอน",
                            "size" => "xl",
                            "weight" => "bold"
                        ],
                        [
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => [
                                [
                                    "type" => "box",
                                    "layout" => "vertical",
                                    "contents" => [
                                        [
                                            "type" => "text",
                                            "text" => "แสงสว่าง",
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
                                    "contents" => [
                                        [
                                            "type" => "text",
                                            "text" => "ปิดอยู่",
                                            "size" => "lg",
                                            "weight" => "bold"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => "30.1°C",
                                            "size" => "lg",
                                            "weight" => "bold",
                                            "color" => "#3867D6"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => "24%",
                                            "size" => "lg",
                                            "weight" => "bold",
                                            "color" => "#3867D6"
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
                    "spacing" => "sm",
                    "contents" => [
                        [
                            "type" => "button",
                            "action" => [
                                "type" => "message",
                                "label" => "เปิดไฟ",
                                "text" => "เปิดไฟห้องนอน"
                            ],
                            "style" => "primary"
                        ],
                        [
                            "type" => "button",
                            "action" => [
                                "type" => "message",
                                "label" => "ปิดไฟ",
                                "text" => "ปิดไฟห้องนอน"
                            ],
                            "color" => "#EC6262",
                            "style" => "primary"
                        ],
                        [
                            "type" => "button",
                            "action" => [
                                "type" => "message",
                                "label" => "เช็คสถานะอีกครั้ง",
                                "text" => "แผงควบคุม"
                            ],
                            "color" => "#F39C12",
                            "style" => "primary"
                        ]
                    ]
                ]
            ],
            [
                "type" => "bubble",
                "hero" => [
                    "type" => "image",
                    "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_6_carousel.png",
                    "size" => "full",
                    "aspectRatio" => "20:13",
                    "aspectMode" => "cover"
                ],
                "body" => [
                    "type" => "box",
                    "layout" => "vertical",
                    "spacing" => "sm",
                    "contents" => [
                        [
                            "type" => "text",
                            "text" => "ห้องนั่งเล่น",
                            "size" => "xl",
                            "weight" => "bold"
                        ],
                        [
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => [
                                [
                                    "type" => "box",
                                    "layout" => "vertical",
                                    "contents" => [
                                        [
                                            "type" => "text",
                                            "text" => "แสงสว่าง",
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
                                    "contents" => [
                                        [
                                            "type" => "text",
                                            "text" => $st_living_lamp,
                                            "size" => "lg",
                                            "weight" => "bold",
                                            "color" => $st_living_lamp_c
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $st_living_temp."°C",
                                            "size" => "lg",
                                            "weight" => "bold",
                                            "color" => "#3867D6"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $st_living_humi."%",
                                            "size" => "lg",
                                            "weight" => "bold",
                                            "color" => "#3867D6"
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
                    "spacing" => "sm",
                    "contents" => [
                        [
                            "type" => "button",
                            "action" => [
                                "type" => "message",
                                "label" => "เปิดไฟ",
                                "text" => "เปิดไฟห้องนอน"
                            ],
                            "style" => "primary"
                        ],
                        [
                            "type" => "button",
                            "action" => [
                                "type" => "message",
                                "label" => "ปิดไฟ",
                                "text" => "ปิดไฟห้องนอน"
                            ],
                            "color" => "#EC6262",
                            "style" => "primary"
                        ],
                        [
                            "type" => "button",
                            "action" => [
                                "type" => "message",
                                "label" => "เช็คสถานะอีกครั้ง",
                                "text" => "แผงควบคุม"
                            ],
                            "color" => "#F39C12",
                            "style" => "primary"
                        ]
                    ]
                ]
            ]
        ]
    ]

];
