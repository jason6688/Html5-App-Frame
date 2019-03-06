<?php

return [
    'adminEmail' => 'admin@example.com',
    'layuiTheme' => [
        'navs' => [
            "contentManagement" => [
                'topMenu' => [
                    "menu" => "contentManagement",
                    "title" => "内容管理",
                    "icon" => "&#xe63c;",
                    "class" => "layui-icon",
                ],
                [
                    "title" => "文章列表",
                    "icon" => "&#xe63c;",
                    "href" => "/user2",
                    "spread" => false
                ],
                [
                    "title" => "图片管理",
                    "icon" => "&#xe634;",
                    "href" => "gii/crud",
                    "spread" => false
                ],
                [
                    "title" => "其他页面",
                    "icon" => "&#xe630;",
                    "href" => "",
                    "spread" => false,
                    "children" => [
                        [
                            "title" => "404页面",
                            "icon" => "&#xe61c;",
                            "href" => "gii/controller",
                            "spread" => false
                        ],
                        [
                            "title" => "登录",
                            "icon" => "&#xe609;",
                            "href" => "gii/form",
                            "spread" => false,
                            "target" => "_blank"
                        ]
                    ]
                ]
            ],
            "memberCenter" => [
                'topMenu' => [
                    "menu" => "memberCenter",
                    "title" => "用户中心",
                    "icon" => "&#xe770;",
                    "class" => "layui-icon",
                ],
                [
                    "title" => "用户中心",
                    "icon" => "&#xe66f;",
                    "href" => "gii/module",
                    "spread" => false
                ],
            ],
            "systemeSttings" => [
                'topMenu' => [
                    "menu" => "systemeSttings",
                    "title" => "系统设置",
                    "icon" => "&#xe620;",
                    "class" => "layui-icon",
                ],
                [
                    "title" => "系统基本参数",
                    "icon" => "&#xe631;",
                    "href" => "gii/crud",
                    "spread" => false
                ],
            ],
        ],

        'mainUrl' => '/gii', // default z1site/site/main
        'noticeUrl' => '/gii/module', // defult z1site/site/notice
        'funcSettting' => true, // default true
        'skin' => true, // default true
        'copyright' => '<p><span>copyright @2019-2029 史亚运</span><a href="#" target="_blank"><img class="layui-nav-img userAvatar" src="LayoutAssetBundleBaseUrl/resources/images/myzero1.jpg" style="margin-left:10px;cursor:pointer;"></a></p>',

    ],



];
