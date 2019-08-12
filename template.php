<?php
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
                    "text" => "฿ 100.15",
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







$jsonFlex2 = [
    [
        "type" => "flex",
        "altText" => "Flex Message",
        "contents" => [
          "type" => "bubble",
          "hero" => [
            "type" => "image",
            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png",
            "size" => "full",
            "aspectRatio" => "20 =>13",
            "aspectMode" => "cover",
            "action" => [
              "type" => "uri",
              "label" => "Line",
              "uri" => "https://linecorp.com/"
            ]
          ],
          "body" => [
            "type" => "box",
            "layout" => "vertical",
            "contents" => [
              [
                "type" => "text",
                "text" => "สถานะ",
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
                    "spacing" => "sm",
                    "contents" => [
                      [
                        "type" => "text",
                        "text" => "ระดับไฟฟ้า",
                        "flex" => 1,
                        "size" => "sm",
                        "align" => "start",
                        "weight" => "bold"
                      ],
                      [
                        "type" => "text",
                        "text" => "223V",
                        "flex" => 2,
                        "size" => "sm",
                        "align" => "start",
                        "gravity" => "center",
                        "color" => "#666666"
                      ]
                    ]
                  ],
                  [
                    "type" => "box",
                    "layout" => "horizontal",
                    "spacing" => "sm",
                    "contents" => [
                      [
                        "type" => "text",
                        "text" => "เปลวไฟ",
                        "flex" => 1,
                        "size" => "sm",
                        "weight" => "bold"
                      ],
                      [
                        "type" => "text",
                        "text" => "ปกติ",
                        "flex" => 2,
                        "size" => "sm",
                        "color" => "#666666"
                      ]
                    ]
                  ],
                  [
                    "type" => "box",
                    "layout" => "horizontal",
                    "contents" => [
                      [
                        "type" => "text",
                        "text" => "อุณหภูมิ",
                        "weight" => "bold"
                      ],
                      [
                        "type" => "text",
                        "text" => "29.7 °C",
                        "flex" => 2,
                        "color" => "#666666"
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
                "type" => "separator"
              ],
              [
                "type" => "button",
                "action" => [
                  "type" => "message",
                  "label" => "เปิดแผงควบคุม",
                  "text" => "แผงควบคุม"
                ],
                "height" => "sm"
              ],
              [
                "type" => "separator"
              ],
              [
                "type" => "button",
                "action" => [
                  "type" => "message",
                  "label" => "เช็คสถานะอีกครั้ง",
                  "text" => "สถานะ"
                ],
                "height" => "sm"
              ],
              [
                "type" => "separator"
              ]
            ]
          ]
        ]
      ]
];


?>