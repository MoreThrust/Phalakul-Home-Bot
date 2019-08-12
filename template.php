<?php
date_default_timezone_set('Asian/Bangkok');
$date = date('d/m/Y');
$time = date('H:i:s');
echo $date+" | "+$time;

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
                                    "text" => "223v",
                                    "size" => "lg",
                                    "weight" => "bold"
                                ],
                                [
                                    "type" => "text",
                                    "text" => "ไม่พบ",
                                    "size" => "lg",
                                    "weight" => "bold"
                                ],
                                [
                                    "type" => "text",
                                    "text" => "29.7°C",
                                    "size" => "lg",
                                    "weight" => "bold"
                                ],
                                [
                                    "type" => "text",
                                    "text" => "45%",
                                    "size" => "lg",
                                    "weight" => "bold"
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
                    "text" => "เมื่อวันที่ " + $date + " เวลา " + $time + "น.",
                    "margin" => "xxl",
                    "size" => "xxs",
                    "align" => "center",
                    "gravity" => "bottom"
                ]
            ]
        ]
    ]
];
