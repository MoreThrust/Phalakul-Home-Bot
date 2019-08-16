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
      "thumbnailImageUrl" => 'http://scontent.fkkc2-1.fna.fbcdn.net/v/t45.1600-4/cp0/q90/spS444/c0.0.284.159a/p160x160/67400655_23843631237530674_8647782389818327040_n.png.jpg?_nc_cat=1&_nc_oc=AQkYHrwzEpe_U2oT0Q2ttfUmfmqsrmdgjsUu65BmHpZ-tpMERe186hPh9TbuaIRdbxM&_nc_ht=scontent.fkkc2-1.fna&oh=48c07f506e4e456d833a7693550a1cf4&oe=5DD3C6EF',
      "title" => "แจ้งเตือน!!",
      "text" => "คุณ \$name ได้ปลดล็อคประตูบ้าน \n$dt"
    ]
];

// TEST
$jsonFlex = ["type" => "flex", "altText" => "Hello Flex Message", "contents" => ["type" => "bubble", "direction" => "ltr", "header" => ["type" => "box", "layout" => "vertical", "contents" => [["type" => "text", "text" => "Purchase", "size" => "lg", "align" => "start", "weight" => "bold", "color" => "#009813"], ["type" => "text", "text" => "฿ 100.15", "size" => "3xl", "weight" => "bold", "color" => "#000000"], ["type" => "text", "text" => "Rabbit Line Pay", "size" => "lg", "weight" => "bold", "color" => "#000000"], ["type" => "text", "text" => "2019.02.14 21:47 (GMT+0700)", "size" => "xs", "color" => "#B2B2B2"], ["type" => "text", "text" => "Payment complete.", "margin" => "lg", "size" => "lg", "color" => "#000000"]]], "body" => ["type" => "box", "layout" => "vertical", "contents" => [["type" => "separator", "color" => "#C3C3C3"], ["type" => "box", "layout" => "baseline", "margin" => "lg", "contents" => [["type" => "text", "text" => "Merchant", "align" => "start", "color" => "#C3C3C3"], ["type" => "text", "text" => "BTS 01", "align" => "end", "color" => "#000000"]]], ["type" => "box", "layout" => "baseline", "margin" => "lg", "contents" => [["type" => "text", "text" => "New balance", "color" => "#C3C3C3"], ["type" => "text", "text" => "฿ 45.57", "align" => "end"]]], ["type" => "separator", "margin" => "lg", "color" => "#C3C3C3"]]], "footer" => ["type" => "box", "layout" => "horizontal", "contents" => [["type" => "text", "text" => "View Details", "size" => "lg", "align" => "start", "color" => "#0084B6", "action" => ["type" => "uri", "label" => "View Details", "uri" => "https://google.co.th/"]]]]]];

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
                                            "text" => $st_Voltage . "V",
                                            "size" => "lg",
                                            "weight" => "bold",
                                            "color" => "#E67E22"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $st_living_temp,
                                            "size" => "lg",
                                            "weight" => "bold",
                                            "color" => "#3867D6"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $st_living_humi,
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
                                            "text" => $st_living_temp,
                                            "size" => "lg",
                                            "weight" => "bold",
                                            "color" => "#3867D6"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $st_living_humi,
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
