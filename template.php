<?php
include("Status.php");
date_default_timezone_set('Asia/Bangkok');
$dateNow = date('Y-m-d');
$timeNow = date('H:i');
$dt = date('เมื่อวันที่ d/m/Y เวลา H:i:s น.');
echo $dt;

// สถานะ
$st_status = [
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
            "layout" => "vertical",
            "spacing" => "sm",
            "margin" => "lg",
            "contents" => [
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
            "text" => "เมื่อวันที่ 22/02/62 เวลา 20:30น.",
            "margin" => "lg",
            "size" => "xxs",
            "align" => "center",
            "gravity" => "center"
          ]
        ]
      ]
    ]
  ];