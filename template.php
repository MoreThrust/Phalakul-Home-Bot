<?php
include("Status.php");
date_default_timezone_set('Asia/Bangkok');
$dateNow = date('Y-m-d');
$timeNow = date('H:i');
$dt = date('เมื่อวันที่ d/m/Y เวลา H:i:s น.');
echo $dt;

// ตั้งเวลา
$js_set_time = [
    "type" => "template",
    "altText" => "this is a buttons template",
    "template" => [
      "type" => "buttons",
      "actions" => [
        [
          "type" => "datetimepicker",
          "label" => "การดำเนินการ 1",
          "data" => "ข้อมูล 1",
          "mode" => "time",
          "initial" => "12:00",
          "max" => "23:59",
          "min" => "00:00"
        ]
      ],
      "title" => "ชื่อ",
      "text" => "ข้อความ"
    ]
  ];

// สถานะ
$js_status = [
    "type" => "flex",
    "altText" => "คุณเช็คสถานะ",
    "contents" => [
        "type" => "bubble",
        "direction" => "ltr",
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
                                            "text" => $st_living_temp . "°C",
                                            "size" => "lg",
                                            "weight" => "bold",
                                            "color" => "#3867D6"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $st_living_humi . "%",
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

// ห้องนั่งเล่น
$js_liv = [
    "type" => "flex",
    "altText" => "คุณเปิดห้องนั่งเล่น",
    "contents" => [
        "type" => "bubble",
        "hero" => [
            "type" => "image",
            "url" => "https://www.forfur.com/img/I75/t_7478_15633384761386102150.jpg",
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
                                    "text" => $st_living_temp . "°C",
                                    "size" => "lg",
                                    "weight" => "bold"
                                ],
                                [
                                    "type" => "text",
                                    "text" => $st_living_humi . "%",
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
            "spacing" => "sm",
            "contents" => [
                [
                    "type" => "text",
                    "text" => "ประตู : " . $st_door,
                    "weight" => "bold"
                ],
                [
                    "type" => "box",
                    "layout" => "horizontal",
                    "contents" => [
                        [
                            "type" => "button",
                            "action" => [
                                "type" => "message",
                                "label" => "ล็อก",
                                "text" => "ล็อกประตู"
                            ],
                            "style" => "primary"
                        ],
                        [
                            "type" => "button",
                            "action" => [
                                "type" => "message",
                                "label" => "ปลดล็อก",
                                "text" => "ปลดล็อกประตู"
                            ],
                            "color" => "#EC6262",
                            "margin" => "xl",
                            "style" => "primary"
                        ]
                    ]
                ],
                [
                    "type" => "separator",
                    "margin" => "md"
                ],
                [
                    "type" => "text",
                    "text" => "แสงสว่าง : เปิดอยู่",
                    "weight" => "bold"
                ],
                [
                    "type" => "box",
                    "layout" => "horizontal",
                    "contents" => [
                        [
                            "type" => "button",
                            "action" => [
                                "type" => "message",
                                "label" => "เปิดไฟ",
                                "text" => "เปิดไฟห้องนั่งเล่น"
                            ],
                            "style" => "primary"
                        ],
                        [
                            "type" => "button",
                            "action" => [
                                "type" => "message",
                                "label" => "ปิดไฟ",
                                "text" => "ปิดไฟห้องนั่งเล่น"
                            ],
                            "color" => "#EC6262",
                            "margin" => "xl",
                            "style" => "primary"
                        ]
                    ]
                ],
                [
                    "type" => "separator",
                    "margin" => "md"
                ],
                [
                    "type" => "box",
                    "layout" => "vertical",
                    "margin" => "md",
                    "contents" => [
                        [
                            "type" => "text",
                            "text" => "ตั้วเวลาการทำงาน",
                            "align" => "start",
                            "gravity" => "center",
                            "weight" => "bold"
                        ],
                        [
                            "type" => "button",
                            "action" => [
                                "type" => "uri",
                                "label" => "ตั้งเวลา",
                                "uri" => "line://app/1607001531-7Nx53EX6"
                            ],
                            "color" => "#12A3E7",
                            "margin" => "md",
                            "style" => "primary",
                            "gravity" => "center"
                        ],
                        [
                            "type" => "separator",
                            "margin" => "md"
                        ],
                        [
                            "type" => "box",
                            "layout" => "horizontal",
                            "margin" => "lg",
                            "contents" => [
                                [
                                    "type" => "button",
                                    "action" => [
                                        "type" => "message",
                                        "label" => "เช็คอีกครั้ง",
                                        "text" => "ห้องนั่งเล่น"
                                    ],
                                    "color" => "#6C0303",
                                    "style" => "primary"
                                ],
                                [
                                    "type" => "button",
                                    "action" => [
                                        "type" => "message",
                                        "label" => "แผงควบคุม",
                                        "text" => "แผงควบคุม"
                                    ],
                                    "color" => "#F39C12",
                                    "margin" => "xl",
                                    "style" => "primary"
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

// Quick Reply
$js_q_replay = [
      
        "type" => "text",
        "text" => "Hello Quick Reply!",
        "quickReply" => [
          "items" => [
            [
              "type" => "action",
              "action" => [
                "type" => "cameraRoll",
                "label" => "Camera Roll"
              ]
            ],
            [
              "type" => "action",
              "action" => [
                "type" => "camera",
                "label" => "Camera"
              ]
            ],
            [
              "type" => "action",
              "action" => [
                "type" => "location",
                "label" => "Location"
              ]
            ],
            [
              "type" => "action",
              "imageUrl" => "https://cdn1.iconfinder.com/data/icons/mix-color-3/502/Untitled-1-512.png",
              "action" => [
                "type" => "message",
                "label" => "Message",
                "text" => "Hello World!"
              ]
              ],
            [
              "type" => "action",
              "action" => [
                "type" => "postback",
                "label" => "Postback",
                "data" => "action=buy&itemid=123",
                "displayText" => "Buy"
              ]
              ],
            [
              "type" => "action",
              "imageUrl" => "https://icla.org/wp-content/uploads/2018/02/blue-calendar-icon.png",
              "action" => [
                "type" => "datetimepicker",
                "label" => "Datetime Picker",
                "data" => "storeId=12345",
                "mode" => "datetime",
                "initial" => "2018-08-10t00:00",
                "max" => "2018-12-31t23:59",
                "min" => "2018-08-01t00:00"
              ]
            ]
          ]
        ]
      
     
  ];