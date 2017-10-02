<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ticket extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('welcome_message');
    }
    public function callback()
    {
        $postData = $this->input->raw_input_stream;
        log_message('debug', $postData);
        $resultData =[
           'code'=>1
        ];
        $postArray = json_decode($postData, true);
        if (isset($postArray['code'])) {
            $this->load->model('TicketModel', '', true);
            $ticketModel = new TicketModel();
            $result= $ticketModel->getOrInsertTicket($postArray);
            if ($result) {
                $resultData['code'] =0;
            }
        }
        echo json_encode($resultData);
    }
    public function getTicketInfoByCode()
    {
        $resultData =[
            'code'=>1
        ];
        $code = $this->input->post('code');
        if ($code) {
            $this->load->model('TicketModel', '', true);
            $ticketModel = new TicketModel();
            $result= $ticketModel->getTicketByCode($code);
            if ($result) {
                $resultData['code'] =0;
                $resultData['data'] =$result;
            }
        }
        echo json_encode($resultData);
    }
    public function getSpeakInfo()
    {
        $json='{
  "code": 0,
  "data": [
    {
      "time": "2017-10-14",
      "list": [
        {
          "room": "307",
          "list": [
            {
              "titile": "Registration",
              "speark": "gnome",
              "startime": "8:30",
              "endtime": "9:00"
            },
            {
              "titile": "Opening - GNOME.Asia summit Video + show（川剧变脸）",
              "speark": "gnome",
              "startime": "9:00",
              "endtime": "9:10"
            },
            {
              "titile": "Greeting",
              "speark": "GNOME/重慶大學/鑽石",
              "startime": "9:10",
              "endtime": "9:25"
            },
            {
              "titile": "Keynote - You are the future of GNOME",
              "speark": "Nuritzi Sanchez（President of GNOME Foundation）",
              "startime": "9:25",
              "endtime": "9:55"
            },
            {
              "titile": "Keynote - 区块链项目开源实践",
              "speark": "张铮文（NEO核心开发者）",
              "startime": "9:55",
              "endtime": "10:55"
            },
            {
              "titile": "Break",
              "speark": "NULL",
              "startime": "10:55",
              "endtime": "11:05"
            },
            {
              "titile": "Building A Real Market for Applications",
              "speark": "Sriram Ramkrishna",
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
              "endtime": "15:30"
            },
            {
              "titile": "民主湖畔话开源（TBD）",
              "speark": "NULL",
              "startime": "15:30",
              "endtime": "16:30"
            },
            {
              "titile": "Lighting Talks (8 talks 5min)",
              "speark": "8 talkers",
              "startime": "16:30",
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
        {
          "room": "504",
          "list": [
            {
              "titile": "Building medical devices from GNOME",
              "speark": "Ekaterina Gerasimova",
              "startime": "11:05",
              "endtime": "12:05"
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
            }
          ]
        },
        {
          "room": "506",
          "list": [
            {
              "titile": "open Source is an option of life",
              "speark": "Yan Sun",
              "startime": "11:05",
              "endtime": "12:05"
            },
            {
              "titile": "NW.js：使用Web技术开发本地应用程序",
              "speark": "王文睿",
              "startime": "13:40",
              "endtime": "14:25"
            },
            {
              "titile": "Have fun with OpenQA - OpenQA for GUI testing",
              "speark": "Jiawei Sun / 孙嘉伟",
              "startime": "14:25",
              "endtime": "15:10"
            }
          ]
        }
      ]
    },
    {
      "time": "2017-10-15",
      "list": [
        {
          "room": "307",
          "list": [
            {
              "titile": "Registration",
              "speark": "NULL",
              "startime": "8:30",
              "endtime": "9:00"
            },
            {
              "titile": "Endless OS, a GNOME desktop for the next billion users",
              "speark": "Cosimo Cecchi",
              "startime": "9:10",
              "endtime": "9:45"
            },
            {
              "titile": "TBD",
              "speark": "Lennart Poettering",
              "startime": "9:45",
              "endtime": "10:30"
            },
            {
              "titile": "Break",
              "speark": "NULL",
              "startime": "10:30",
              "endtime": "10:40"
            },
            {
              "titile": "微软热爱Linux",
              "speark": "Emily Chen",
              "startime": "10:40",
              "endtime": "11:25"
            },
            {
              "titile": "GNOME to 2020 and beyond!",
              "speark": "Neil McGovern",
              "startime": "11:25",
              "endtime": "12:10"
            },
            {
              "titile": "Lunch",
              "speark": "NULL",
              "startime": "12:10",
              "endtime": "13:40"
            },
            {
              "titile": "(rpm-)ostree + GNOME = ❤",
              "speark": "David King",
              "startime": "13:40",
              "endtime": "14:25"
            },
            {
              "titile": "Tea Break",
              "speark": "NULL",
              "startime": "14:25",
              "endtime": "14:40"
            },
            {
              "titile": "Keynote - The Certification Committee of The Document Foundation",
              "speark": "Frank Lin",
              "startime": "14:40",
              "endtime": "15:25"
            },
            {
              "titile": "Keynote - TBD",
              "speark": "《鳥哥的Linux私房菜》作者——蔡德明",
              "startime": "15:25",
              "endtime": "16:10"
            },
            {
              "titile": "Lighting Talks (8 talks 5min)",
              "speark": "8 talkers",
              "startime": "16:10",
              "endtime": "17:00"
            },
            {
              "titile": "Closing Speech",
              "speark": "Local organizer & GNOME.Asia",
              "startime": "17:00",
              "endtime": "17:20"
            },
            {
              "titile": "End of Day 2",
              "speark": "NULL",
              "startime": "17:20",
              "endtime": "17:20"
            }
          ]
        },
        {
          "room": "504",
          "list": [
            {
              "titile": "Unix文化的理解和探讨",
              "speark": "赵鑫磊",
              "startime": "9:00",
              "endtime": "9:45"
            },
            {
              "titile": "Why Foss in Education makes sense",
              "speark": "Shobha Tyagi",
              "startime": "9:45",
              "endtime": "10:30"
            },
            {
              "titile": "Break",
              "speark": "NULL",
              "startime": "10:30",
              "endtime": "10:40"
            },
            {
              "titile": "Generating CentOS ISO/LiveCD",
              "speark": "Fu Wei",
              "startime": "10:40",
              "endtime": "11:25"
            },
            {
              "titile": "C++的最新标准--C++17及未来",
              "speark": "祁宇",
              "startime": "11:25",
              "endtime": "12:10"
            },
            {
              "titile": "The GNOME Contribution Workflow for Newcomers",
              "speark": "Chingkai Chu/朱庆凯",
              "startime": "13:40",
              "endtime": "14:25"
            }
            }
          ]
        },
        {
          "room": "506",
          "list": [
            {
              "titile": "Linux上的信息无障碍",
              "speark": "刘彪",
              "startime": "9:00",
              "endtime": "9:45"
            },
            {
              "titile": "GNOME Introduction",
              "speark": "Bin Li",
              "startime": "9:45",
              "endtime": "10:30"
            },
            {
              "titile": "Break",
              "speark": "NULL",
              "startime": "10:30",
              "endtime": "10:40"
            },
            {
              "titile": "Transform a dumb outdated router into Digital Jukebox/Internet Radio with LEDE/OpenWRT",
              "speark": "IWAN S. TAHARI",
              "startime": "10:40",
              "endtime": "11:25"
            },
            {
              "titile": "How could a software engineer survive with opensource",
              "speark": "Hermet Park",
              "startime": "11:25",
              "endtime": "12:10"
            },
            {
              "titile": "How to help with your regular QA Skills: Help to shape open web",
              "speark": "Hossain Al Ikram",
              "startime": "13:40",
              "endtime": "14:25"
            }
          ]
        },
        {
          "room": "510",
          "list": [
            {
              "titile": "Newcomers workshop（社区新手训练营，全英文）",
              "speark": "Ekaterina Gerasimova (Kat) + others",
              "startime": "10:30",
              "endtime": "12:10"
            },
            {
              "titile": "开源圆桌会——山城龙门阵",
              "speark": "国内各大高校开源社区、城市开源社区",
              "startime": "14:00",
              "endtime": "16:00"
            },
            {
              "titile": "社区联欢会——自己的社区自己来",
              "speark": "国内各大高校开源社区、城市开源社区",
              "startime": "14:00",
              "endtime": "15:00"
            },
            {
              "titile": "开源辩论赛（）",
              "speark": "Vi党大战Emacs党，不服来战",
              "startime": "15:00",
              "endtime": "16:00"
            }
          ]
        }
      ]
    }
  ]
}';
        echo $json;
    }
    public function getSpeakInfoAndroid()
    {
        $json='{
  "code": 0,
  "data": [
    {
      "time": "2017-10-14",
      "list": [
        {
          "room": "307",
          "list": [
            {
              "titile": "Registration",
              "speark": "gnome",
              "startime": "8:30",
              "endtime": "9:00"
            },
            {
              "titile": "Opening - GNOME.Asia summit Video + show（川剧变脸）",
              "speark": "gnome",
              "startime": "9:00",
              "endtime": "9:10"
            },
            {
              "titile": "Greeting",
              "speark": "GNOME/重慶大學/鑽石",
              "startime": "9:10",
              "endtime": "9:25"
            },
            {
              "titile": "Keynote - You are the future of GNOME",
              "speark": "Nuritzi Sanchez（President of GNOME Foundation）",
              "startime": "9:25",
              "endtime": "9:55"
            },
            {
              "titile": "Keynote - 区块链项目开源实践",
              "speark": "张铮文（NEO核心开发者）",
              "startime": "9:55",
              "endtime": "10:55"
            },
            {
              "titile": "Break",
              "speark": "NULL",
              "startime": "10:55",
              "endtime": "11:05"
            },
            {
              "titile": "Building A Real Market for Applications",
              "speark": "Sriram Ramkrishna",
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
              "endtime": "15:30"
            },
            {
              "titile": "民主湖畔话开源（TBD）",
              "speark": "NULL",
              "startime": "15:30",
              "endtime": "16:30"
            },
            {
              "titile": "Lighting Talks (8 talks 5min)",
              "speark": "8 talkers",
              "startime": "16:30",
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
        {
          "room": "504",
          "list": [
            {
              "titile": "Building medical devices from GNOME",
              "speark": "Ekaterina Gerasimova",
              "startime": "11:05",
              "endtime": "12:05"
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
            }
          ]
        },
        {
          "room": "506",
          "list": [
            {
              "titile": "open Source is an option of life",
              "speark": "Yan Sun",
              "startime": "11:05",
              "endtime": "12:05"
            },
            {
              "titile": "NW.js：使用Web技术开发本地应用程序",
              "speark": "王文睿",
              "startime": "13:40",
              "endtime": "14:25"
            },
            {
              "titile": "Have fun with OpenQA - OpenQA for GUI testing",
              "speark": "Jiawei Sun / 孙嘉伟",
              "startime": "14:25",
              "endtime": "15:10"
            }
          ]
        }
      ]
    },
    {
      "time": "2017-10-15",
      "list": [
        {
          "room": "307",
          "list": [
            {
              "titile": "Registration",
              "speark": "NULL",
              "startime": "8:30",
              "endtime": "9:00"
            },
            {
              "titile": "Endless OS, a GNOME desktop for the next billion users",
              "speark": "Cosimo Cecchi",
              "startime": "9:10",
              "endtime": "9:45"
            },
            {
              "titile": "TBD",
              "speark": "Lennart Poettering",
              "startime": "9:45",
              "endtime": "10:30"
            },
            {
              "titile": "Break",
              "speark": "NULL",
              "startime": "10:30",
              "endtime": "10:40"
            },
            {
              "titile": "微软热爱Linux",
              "speark": "Emily Chen",
              "startime": "10:40",
              "endtime": "11:25"
            },
            {
              "titile": "GNOME to 2020 and beyond!",
              "speark": "Neil McGovern",
              "startime": "11:25",
              "endtime": "12:10"
            },
            {
              "titile": "Lunch",
              "speark": "NULL",
              "startime": "12:10",
              "endtime": "13:40"
            },
            {
              "titile": "(rpm-)ostree + GNOME = ❤",
              "speark": "David King",
              "startime": "13:40",
              "endtime": "14:25"
            },
            {
              "titile": "Tea Break",
              "speark": "NULL",
              "startime": "14:25",
              "endtime": "14:40"
            },
            {
              "titile": "Keynote - The Certification Committee of The Document Foundation",
              "speark": "Frank Lin",
              "startime": "14:40",
              "endtime": "15:25"
            },
            {
              "titile": "Keynote - TBD",
              "speark": "《鳥哥的Linux私房菜》作者——蔡德明",
              "startime": "15:25",
              "endtime": "16:10"
            },
            {
              "titile": "Lighting Talks (8 talks 5min)",
              "speark": "8 talkers",
              "startime": "16:10",
              "endtime": "17:00"
            },
            {
              "titile": "Closing Speech",
              "speark": "Local organizer & GNOME.Asia",
              "startime": "17:00",
              "endtime": "17:20"
            },
            {
              "titile": "End of Day 2",
              "speark": "NULL",
              "startime": "17:20",
              "endtime": "17:20"
            }
          ]
        },
        {
          "room": "504",
          "list": [
            {
              "titile": "Unix文化的理解和探讨",
              "speark": "赵鑫磊",
              "startime": "9:00",
              "endtime": "9:45"
            },
            {
              "titile": "Why Foss in Education makes sense",
              "speark": "Shobha Tyagi",
              "startime": "9:45",
              "endtime": "10:30"
            },
            {
              "titile": "Break",
              "speark": "NULL",
              "startime": "10:30",
              "endtime": "10:40"
            },
            {
              "titile": "Generating CentOS ISO/LiveCD",
              "speark": "Fu Wei",
              "startime": "10:40",
              "endtime": "11:25"
            },
            {
              "titile": "C++的最新标准--C++17及未来",
              "speark": "祁宇",
              "startime": "11:25",
              "endtime": "12:10"
            },
            {
              "titile": "The GNOME Contribution Workflow for Newcomers",
              "speark": "Chingkai Chu/朱庆凯",
              "startime": "13:40",
              "endtime": "14:25"
            }
            }
          ]
        },
        {
          "room": "506",
          "list": [
            {
              "titile": "Linux上的信息无障碍",
              "speark": "刘彪",
              "startime": "9:00",
              "endtime": "9:45"
            },
            {
              "titile": "GNOME Introduction",
              "speark": "Bin Li",
              "startime": "9:45",
              "endtime": "10:30"
            },
            {
              "titile": "Break",
              "speark": "NULL",
              "startime": "10:30",
              "endtime": "10:40"
            },
            {
              "titile": "Transform a dumb outdated router into Digital Jukebox/Internet Radio with LEDE/OpenWRT",
              "speark": "IWAN S. TAHARI",
              "startime": "10:40",
              "endtime": "11:25"
            },
            {
              "titile": "How could a software engineer survive with opensource",
              "speark": "Hermet Park",
              "startime": "11:25",
              "endtime": "12:10"
            },
            {
              "titile": "How to help with your regular QA Skills: Help to shape open web",
              "speark": "Hossain Al Ikram",
              "startime": "13:40",
              "endtime": "14:25"
            }
          ]
        },
        {
          "room": "510",
          "list": [
            {
              "titile": "Newcomers workshop（社区新手训练营，全英文）",
              "speark": "Ekaterina Gerasimova (Kat) + others",
              "startime": "10:30",
              "endtime": "12:10"
            },
            {
              "titile": "开源圆桌会——山城龙门阵",
              "speark": "国内各大高校开源社区、城市开源社区",
              "startime": "14:00",
              "endtime": "16:00"
            },
            {
              "titile": "社区联欢会——自己的社区自己来",
              "speark": "国内各大高校开源社区、城市开源社区",
              "startime": "14:00",
              "endtime": "15:00"
            },
            {
              "titile": "开源辩论赛（）",
              "speark": "Vi党大战Emacs党，不服来战",
              "startime": "15:00",
              "endtime": "16:00"
            }
          ]
        }
      ]
    }
  ]
}';
        echo $json;
    }
    public function getSpeakInfoIos()
    {
        $json='{
  "code": 0,
  "data": [
    {
      "time": "2017-10-14",
      "list": [
        {
          "room": "307",
          "list": [
            {
              "titile": "Registration",
              "speark": "gnome",
              "startime": "8:30",
              "endtime": "9:00"
            },
            {
              "titile": "Opening - GNOME.Asia summit Video + show（川剧变脸）",
              "speark": "gnome",
              "startime": "9:00",
              "endtime": "9:10"
            },
            {
              "titile": "Greeting",
              "speark": "GNOME/重慶大學/鑽石",
              "startime": "9:10",
              "endtime": "9:25"
            },
            {
              "titile": "Keynote - You are the future of GNOME",
              "speark": "Nuritzi Sanchez（President of GNOME Foundation）",
              "startime": "9:25",
              "endtime": "9:55"
            },
            {
              "titile": "Keynote - 区块链项目开源实践",
              "speark": "张铮文（NEO核心开发者）",
              "startime": "9:55",
              "endtime": "10:55"
            },
            {
              "titile": "Break",
              "speark": "NULL",
              "startime": "10:55",
              "endtime": "11:05"
            },
            {
              "titile": "Building A Real Market for Applications",
              "speark": "Sriram Ramkrishna",
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
              "endtime": "15:30"
            },
            {
              "titile": "民主湖畔话开源（TBD）",
              "speark": "NULL",
              "startime": "15:30",
              "endtime": "16:30"
            },
            {
              "titile": "Lighting Talks (8 talks 5min)",
              "speark": "8 talkers",
              "startime": "16:30",
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
        {
          "room": "504",
          "list": [
            {
              "titile": "Building medical devices from GNOME",
              "speark": "Ekaterina Gerasimova",
              "startime": "11:05",
              "endtime": "12:05"
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
            }
          ]
        },
        {
          "room": "506",
          "list": [
            {
              "titile": "open Source is an option of life",
              "speark": "Yan Sun",
              "startime": "11:05",
              "endtime": "12:05"
            },
            {
              "titile": "NW.js：使用Web技术开发本地应用程序",
              "speark": "王文睿",
              "startime": "13:40",
              "endtime": "14:25"
            },
            {
              "titile": "Have fun with OpenQA - OpenQA for GUI testing",
              "speark": "Jiawei Sun / 孙嘉伟",
              "startime": "14:25",
              "endtime": "15:10"
            }
          ]
        }
      ]
    },
    {
      "time": "2017-10-15",
      "list": [
        {
          "room": "307",
          "list": [
            {
              "titile": "Registration",
              "speark": "NULL",
              "startime": "8:30",
              "endtime": "9:00"
            },
            {
              "titile": "Endless OS, a GNOME desktop for the next billion users",
              "speark": "Cosimo Cecchi",
              "startime": "9:10",
              "endtime": "9:45"
            },
            {
              "titile": "TBD",
              "speark": "Lennart Poettering",
              "startime": "9:45",
              "endtime": "10:30"
            },
            {
              "titile": "Break",
              "speark": "NULL",
              "startime": "10:30",
              "endtime": "10:40"
            },
            {
              "titile": "微软热爱Linux",
              "speark": "Emily Chen",
              "startime": "10:40",
              "endtime": "11:25"
            },
            {
              "titile": "GNOME to 2020 and beyond!",
              "speark": "Neil McGovern",
              "startime": "11:25",
              "endtime": "12:10"
            },
            {
              "titile": "Lunch",
              "speark": "NULL",
              "startime": "12:10",
              "endtime": "13:40"
            },
            {
              "titile": "(rpm-)ostree + GNOME = ❤",
              "speark": "David King",
              "startime": "13:40",
              "endtime": "14:25"
            },
            {
              "titile": "Tea Break",
              "speark": "NULL",
              "startime": "14:25",
              "endtime": "14:40"
            },
            {
              "titile": "Keynote - The Certification Committee of The Document Foundation",
              "speark": "Frank Lin",
              "startime": "14:40",
              "endtime": "15:25"
            },
            {
              "titile": "Keynote - TBD",
              "speark": "《鳥哥的Linux私房菜》作者——蔡德明",
              "startime": "15:25",
              "endtime": "16:10"
            },
            {
              "titile": "Lighting Talks (8 talks 5min)",
              "speark": "8 talkers",
              "startime": "16:10",
              "endtime": "17:00"
            },
            {
              "titile": "Closing Speech",
              "speark": "Local organizer & GNOME.Asia",
              "startime": "17:00",
              "endtime": "17:20"
            },
            {
              "titile": "End of Day 2",
              "speark": "NULL",
              "startime": "17:20",
              "endtime": "17:20"
            }
          ]
        },
        {
          "room": "504",
          "list": [
            {
              "titile": "Unix文化的理解和探讨",
              "speark": "赵鑫磊",
              "startime": "9:00",
              "endtime": "9:45"
            },
            {
              "titile": "Why Foss in Education makes sense",
              "speark": "Shobha Tyagi",
              "startime": "9:45",
              "endtime": "10:30"
            },
            {
              "titile": "Break",
              "speark": "NULL",
              "startime": "10:30",
              "endtime": "10:40"
            },
            {
              "titile": "Generating CentOS ISO/LiveCD",
              "speark": "Fu Wei",
              "startime": "10:40",
              "endtime": "11:25"
            },
            {
              "titile": "C++的最新标准--C++17及未来",
              "speark": "祁宇",
              "startime": "11:25",
              "endtime": "12:10"
            },
            {
              "titile": "The GNOME Contribution Workflow for Newcomers",
              "speark": "Chingkai Chu/朱庆凯",
              "startime": "13:40",
              "endtime": "14:25"
            }
            }
          ]
        },
        {
          "room": "506",
          "list": [
            {
              "titile": "Linux上的信息无障碍",
              "speark": "刘彪",
              "startime": "9:00",
              "endtime": "9:45"
            },
            {
              "titile": "GNOME Introduction",
              "speark": "Bin Li",
              "startime": "9:45",
              "endtime": "10:30"
            },
            {
              "titile": "Break",
              "speark": "NULL",
              "startime": "10:30",
              "endtime": "10:40"
            },
            {
              "titile": "Transform a dumb outdated router into Digital Jukebox/Internet Radio with LEDE/OpenWRT",
              "speark": "IWAN S. TAHARI",
              "startime": "10:40",
              "endtime": "11:25"
            },
            {
              "titile": "How could a software engineer survive with opensource",
              "speark": "Hermet Park",
              "startime": "11:25",
              "endtime": "12:10"
            },
            {
              "titile": "How to help with your regular QA Skills: Help to shape open web",
              "speark": "Hossain Al Ikram",
              "startime": "13:40",
              "endtime": "14:25"
            }
          ]
        },
        {
          "room": "510",
          "list": [
            {
              "titile": "Newcomers workshop（社区新手训练营，全英文）",
              "speark": "Ekaterina Gerasimova (Kat) + others",
              "startime": "10:30",
              "endtime": "12:10"
            },
            {
              "titile": "开源圆桌会——山城龙门阵",
              "speark": "国内各大高校开源社区、城市开源社区",
              "startime": "14:00",
              "endtime": "16:00"
            },
            {
              "titile": "社区联欢会——自己的社区自己来",
              "speark": "国内各大高校开源社区、城市开源社区",
              "startime": "14:00",
              "endtime": "15:00"
            },
            {
              "titile": "开源辩论赛（）",
              "speark": "Vi党大战Emacs党，不服来战",
              "startime": "15:00",
              "endtime": "16:00"
            }
          ]
        }
      ]
    }
  ]
}';
        echo $json;
    }
}

?>
