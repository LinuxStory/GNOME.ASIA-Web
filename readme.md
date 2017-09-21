
#接口文档

##根据码获取票信息

###地址

http://gnome.liumax.com/ticket/getTicketInfoByCode

###参数

code 票号

###返回值

      {
          "code": 0,
          "data": {
              "ticket_id": "1",
              "ticket_code": "6688888",
              "ticket_order_id": "863",
              "ticket_ticket_id": "1053",
              "ticket_event_id": "668",
              "ticket_status": null,
              "ticket_custom_fields": "[{\"key\":\"\\u662f\\u5426\\u5b66\\u751f\",\"value\":[\"1.true\"]},{\"key\":\"\\u59d3\\u540d\",\"value\":[\"1.\\u6881\\u5b88\\u9e4f\"]},{\"key\":\"\\u6240\\u5728\\u5b66\\u6821\\u6216\\u5355\\u4f4d\\/\\u516c\\u53f8\\u540d\\u79f0\",\"value\":[\"1.\\u897f\\u5b89\\u79d1\\u6280\\u5927\\u5b66\"]}]",
              "ticket_remark": "测试",
              "ticket_email": "test@tinyticket.co",
              "ticket_phone": "18673673161",
              "ticket_user_nickname": null,
              "ticket_user_avatar": "https://duohui.co/images/default-avatar.png",
              "ticket_quantity": "2",
              "ticket_used_quantity": "0",
              "ticket_refunded_quantity": "0",
              "ticket_total_amount": "200",
              "ticket_paid_amount": "200",
              "ticket_discount_amount": "0",
              "ticket_refunded_amount": "0",
              "ticket_created_at": "2017-08-28 10:02:36",
              "ticket_updated_at": "2017-08-28 10:02:36",
              "ticket_external": null,
              "ticket_created_at_gnome": "2017-09-11 18:51:07"
          }
      }

##获取议程

###地址

http://gnome.liumax.com/ticket/getSpeakInfo

###参数

###返回值

    {
        "2017-10-14": {
            "305": [
                {
                    "titile": "GNOME.Asia summit Video + show",
                    "speark": "gnome",
                    "startime": "9:00",
                    "endtime": "9:10"
                },
                {
                    "titile": "Greeting",
                    "speark": "GNOME/重慶大學/鑽石",
                    "startime": "9:10",
                    "endtime": "9:40"
                },
                {
                    "titile": "Greeting",
                    "speark": "重慶組委會",
                    "startime": "9:40",
                    "endtime": "9:55"
                },
                {
                    "titile": "Break",
                    "speark": "NULL",
                    "startime": "10:55",
                    "endtime": "11:05"
                },
                {
                    "titile": "Keynote",
                    "speark": "鑽石預留×2（each 30 mins）",
                    "startime": "11:05",
                    "endtime": "12:05"
                },
                {
                    "titile": "Group Photo Day 1",
                    "speark": "NULL",
                    "startime": "12:05",
                    "endtime": "12:15"
                },
                {
                    "titile": "Lunch",
                    "speark": "NULL",
                    "startime": "12:15",
                    "endtime": "13:40"
                },
                {
                    "titile": "Flatpak - apps for your desktop",
                    "speark": "Matthias Clasen",
                    "startime": "13:40",
                    "endtime": "14:25"
                },
                {
                    "titile": "GNOME and BlockChains - Increasing participation and accountability in decision making",
                    "speark": "Anish Patil, Daniel playfair",
                    "startime": "14:25",
                    "endtime": "15:10"
                },
                {
                    "titile": "Tea Break",
                    "speark": "NULL",
                    "startime": "15:10",
                    "endtime": "15:40"
                },
                {
                    "titile": "Building A Real Market for Applications",
                    "speark": "Sriram Ramkrishna",
                    "startime": "15:40",
                    "endtime": "16:25"
                },
                {
                    "titile": "Break",
                    "speark": "NULL",
                    "startime": "16:25",
                    "endtime": "16:40"
                },
                {
                    "titile": "Lighting Talks (8 talks 5min)",
                    "speark": "8 talkers",
                    "startime": "16:40",
                    "endtime": "17:20"
                },
                {
                    "titile": "First Day Close",
                    "speark": "NULL",
                    "startime": "17:20",
                    "endtime": "17:30"
                }
            ],
            "504": [
                {
                    "titile": "GNOME.Asia summit Video + show",
                    "speark": "gnome",
                    "startime": "9:00",
                    "endtime": "9:10"
                },
                {
                    "titile": "Greeting",
                    "speark": "GNOME/重慶大學/鑽石",
                    "startime": "9:10",
                    "endtime": "9:40"
                },
                {
                    "titile": "Greeting",
                    "speark": "重慶組委會",
                    "startime": "9:40",
                    "endtime": "9:55"
                },
                {
                    "titile": "Break",
                    "speark": "NULL",
                    "startime": "10:55",
                    "endtime": "11:05"
                },
                {
                    "titile": "Keynote",
                    "speark": "鑽石預留×2（each 30 mins）",
                    "startime": "11:05",
                    "endtime": "12:05"
                },
                {
                    "titile": "Group Photo Day 1",
                    "speark": "NULL",
                    "startime": "12:05",
                    "endtime": "12:15"
                },
                {
                    "titile": "Lunch",
                    "speark": "NULL",
                    "startime": "12:15",
                    "endtime": "13:40"
                },
                {
                    "titile": "Let the general public embrace opensource by being makers",
                    "speark": "吳念祖（WU,NIEN-TSU）",
                    "startime": "13:40",
                    "endtime": "14:25"
                },
                {
                    "titile": "Build, Ship and Run -- 让操作系统的定制分发更加简单",
                    "speark": "梁辰晔",
                    "startime": "14:25",
                    "endtime": "15:10"
                },
                {
                    "titile": "Tea Break",
                    "speark": "NULL",
                    "startime": "15:10",
                    "endtime": "15:40"
                },
                {
                    "titile": "Building medical devices from GNOME",
                    "speark": "Ekaterina",
                    "startime": "15:40",
                    "endtime": "16:25"
                },
                {
                    "titile": "Break",
                    "speark": "NULL",
                    "startime": "16:25",
                    "endtime": "16:40"
                },
                {
                    "titile": "Lighting Talks (8 talks 5min)",
                    "speark": "8 talkers",
                    "startime": "16:40",
                    "endtime": "17:20"
                },
                {
                    "titile": "First Day Close",
                    "speark": "NULL",
                    "startime": "17:20",
                    "endtime": "17:30"
                }
            ],
            "505": [
                {
                    "titile": "GNOME.Asia summit Video + show",
                    "speark": "gnome",
                    "startime": "9:00",
                    "endtime": "9:10"
                },
                {
                    "titile": "Greeting",
                    "speark": "GNOME/重慶大學/鑽石",
                    "startime": "9:10",
                    "endtime": "9:40"
                },
                {
                    "titile": "Greeting",
                    "speark": "重慶組委會",
                    "startime": "9:40",
                    "endtime": "9:55"
                },
                {
                    "titile": "Break",
                    "speark": "NULL",
                    "startime": "10:55",
                    "endtime": "11:05"
                },
                {
                    "titile": "Keynote",
                    "speark": "鑽石預留×2（each 30 mins）",
                    "startime": "11:05",
                    "endtime": "12:05"
                },
                {
                    "titile": "Group Photo Day 1",
                    "speark": "NULL",
                    "startime": "12:05",
                    "endtime": "12:15"
                },
                {
                    "titile": "Lunch",
                    "speark": "NULL",
                    "startime": "12:15",
                    "endtime": "13:40"
                },
                {
                    "titile": "Flatpak - apps for your desktop",
                    "speark": "Matthias Clasen",
                    "startime": "13:40",
                    "endtime": "14:25"
                },
                {
                    "titile": "Have fun with OpenQA - OpenQA for GUI testing",
                    "speark": "Jiawei Sun / 孙嘉伟",
                    "startime": "14:25",
                    "endtime": "15:10"
                },
                {
                    "titile": "Tea Break",
                    "speark": "NULL",
                    "startime": "15:10",
                    "endtime": "15:40"
                },
                {
                    "titile": "open Source is an option of life",
                    "speark": "Yan Sun",
                    "startime": "15:40",
                    "endtime": "16:25"
                },
                {
                    "titile": "Break",
                    "speark": "NULL",
                    "startime": "16:25",
                    "endtime": "16:40"
                },
                {
                    "titile": "Lighting Talks (8 talks 5min)",
                    "speark": "8 talkers",
                    "startime": "16:40",
                    "endtime": "17:20"
                },
                {
                    "titile": "First Day Close",
                    "speark": "NULL",
                    "startime": "17:20",
                    "endtime": "17:30"
                }
            ]
        },
        "2017-10-15": {
            "305": [
                {
                    "titile": "Reception",
                    "speark": "NULL",
                    "startime": "8:30",
                    "endtime": "9:00"
                },
                {
                    "titile": "opening",
                    "speark": "NULL",
                    "startime": "9:00",
                    "endtime": "9:10"
                },
                {
                    "titile": "Endless OS, a GNOME desktop for the next billion users",
                    "speark": "Cosimo Cecchi",
                    "startime": "9:10",
                    "endtime": "9:55"
                },
                {
                    "titile": "Break",
                    "speark": "NULL",
                    "startime": "9:55",
                    "endtime": "10:10"
                },
                {
                    "titile": "微软热爱Linux",
                    "speark": "Emily Chen",
                    "startime": "10:10",
                    "endtime": "10:55"
                },
                {
                    "titile": "GNOME to 2020 and beyond!",
                    "speark": "Neil McGovern",
                    "startime": "10:55",
                    "endtime": "11:40"
                },
                {
                    "titile": "Group Photo Day 2",
                    "speark": "NULL",
                    "startime": "11:40",
                    "endtime": "12:05"
                },
                {
                    "titile": "Lunch",
                    "speark": "NULL",
                    "startime": "12:05",
                    "endtime": "13:40"
                },
                {
                    "titile": "(rpm-)ostree + GNOME = ❤",
                    "speark": "David King",
                    "startime": "13:40",
                    "endtime": "14:25"
                },
                {
                    "titile": "TBD",
                    "speark": "Lennart Poettering",
                    "startime": "14:30",
                    "endtime": "15:15"
                },
                {
                    "titile": "break",
                    "speark": "NULL",
                    "startime": "15:15",
                    "endtime": "15:30"
                },
                {
                    "titile": "Keynote - The Certification Committee of The Document Foundation",
                    "speark": "Frank Lin",
                    "startime": "15:30",
                    "endtime": "16:20"
                },
                {
                    "titile": "Keynote",
                    "speark": "鳥哥",
                    "startime": "16:25",
                    "endtime": "17:15"
                },
                {
                    "titile": "Lighting Talks (4 talks 5min)",
                    "speark": "4 talkers",
                    "startime": "17:20",
                    "endtime": "17:40"
                },
                {
                    "titile": "Closing speech",
                    "speark": "Local organizer & GNOME.Asia",
                    "startime": "17:40",
                    "endtime": "18:00"
                },
                {
                    "titile": "End of Day 2",
                    "speark": "NULL",
                    "startime": "18:00",
                    "endtime": "18:00"
                }
            ],
            "504": [
                {
                    "titile": "Reception",
                    "speark": "NULL",
                    "startime": "8:30",
                    "endtime": "9:00"
                },
                {
                    "titile": "opening",
                    "speark": "NULL",
                    "startime": "9:00",
                    "endtime": "9:10"
                },
                {
                    "titile": "Unix文化的理解和探讨",
                    "speark": "赵鑫磊",
                    "startime": "9:10",
                    "endtime": "9:55"
                },
                {
                    "titile": "Break",
                    "speark": "NULL",
                    "startime": "9:55",
                    "endtime": "10:10"
                },
                {
                    "titile": "Generating CentOS ISO/LiveCD",
                    "speark": "Fu Wei",
                    "startime": "10:10",
                    "endtime": "10:55"
                },
                {
                    "titile": "C++的最新标准--C++17及未来",
                    "speark": "祁宇",
                    "startime": "10:55",
                    "endtime": "11:40"
                },
                {
                    "titile": "Group Photo Day 2",
                    "speark": "NULL",
                    "startime": "11:40",
                    "endtime": "12:05"
                },
                {
                    "titile": "Lunch",
                    "speark": "NULL",
                    "startime": "12:05",
                    "endtime": "13:40"
                },
                {
                    "titile": "The GNOME Contribution Workflow for Newcomers",
                    "speark": "Chingkai Chu/朱庆凯",
                    "startime": "13:40",
                    "endtime": "14:25"
                },
                {
                    "titile": "Why Foss in Education makes sense",
                    "speark": "Shobha Tyagi",
                    "startime": "14:30",
                    "endtime": "15:30"
                },
                {
                    "titile": "break",
                    "speark": "NULL",
                    "startime": "15:15",
                    "endtime": "15:30"
                },
                {
                    "titile": "Keynote - The Certification Committee of The Document Foundation",
                    "speark": "Frank Lin",
                    "startime": "15:30",
                    "endtime": "16:20"
                },
                {
                    "titile": "Keynote",
                    "speark": "鳥哥",
                    "startime": "16:25",
                    "endtime": "17:15"
                },
                {
                    "titile": "Lighting Talks (4 talks 5min)",
                    "speark": "4 talkers",
                    "startime": "17:20",
                    "endtime": "17:40"
                },
                {
                    "titile": "Closing speech",
                    "speark": "Local organizer & GNOME.Asia",
                    "startime": "17:40",
                    "endtime": "18:00"
                },
                {
                    "titile": "End of Day 2",
                    "speark": "NULL",
                    "startime": "18:00",
                    "endtime": "18:00"
                }
            ],
            "505": [
                {
                    "titile": "Reception",
                    "speark": "NULL",
                    "startime": "8:30",
                    "endtime": "9:00"
                },
                {
                    "titile": "opening",
                    "speark": "NULL",
                    "startime": "9:00",
                    "endtime": "9:10"
                },
                {
                    "titile": "Linux上的信息无障碍",
                    "speark": "刘彪",
                    "startime": "9:10",
                    "endtime": "9:55"
                },
                {
                    "titile": "Break",
                    "speark": "NULL",
                    "startime": "9:55",
                    "endtime": "10:10"
                },
                {
                    "titile": "Transform a dumb outdated router into Digital Jukebox/Internet Radio with LEDE/OpenWRT",
                    "speark": "IWAN S. TAHARI",
                    "startime": "10:10",
                    "endtime": "10:55"
                },
                {
                    "titile": "Group Photo Day 2",
                    "speark": "NULL",
                    "startime": "11:40",
                    "endtime": "12:05"
                },
                {
                    "titile": "Lunch",
                    "speark": "NULL",
                    "startime": "12:05",
                    "endtime": "13:40"
                },
                {
                    "titile": "How to help with your regular QA Skills: Help to shape open web",
                    "speark": "Hossain Al Ikram",
                    "startime": "13:40",
                    "endtime": "14:25"
                },
                {
                    "titile": "break",
                    "speark": "NULL",
                    "startime": "15:15",
                    "endtime": "15:30"
                },
                {
                    "titile": "Keynote - The Certification Committee of The Document Foundation",
                    "speark": "Frank Lin",
                    "startime": "15:30",
                    "endtime": "16:20"
                },
                {
                    "titile": "Keynote",
                    "speark": "鳥哥",
                    "startime": "16:25",
                    "endtime": "17:15"
                },
                {
                    "titile": "Lighting Talks (4 talks 5min)",
                    "speark": "4 talkers",
                    "startime": "17:20",
                    "endtime": "17:40"
                },
                {
                    "titile": "Closing speech",
                    "speark": "Local organizer & GNOME.Asia",
                    "startime": "17:40",
                    "endtime": "18:00"
                },
                {
                    "titile": "End of Day 2",
                    "speark": "NULL",
                    "startime": "18:00",
                    "endtime": "18:00"
                }
            ],
            "社區專場": [
                {
                    "titile": "Newcomes workshop Ekaterina",
                    "speark": "Gerasimova (Kat) + others",
                    "startime": "9:55",
                    "endtime": "10:10"
                },
                {
                    "titile": "Newcomes workshop Ekaterina",
                    "speark": "Gerasimova (Kat) + others",
                    "startime": "10:10",
                    "endtime": "10:55"
                },
                {
                    "titile": "Newcomes workshop Ekaterina",
                    "speark": "Gerasimova (Kat) + others",
                    "startime": "10:55",
                    "endtime": "11:40"
                }
            ]
        }
    }