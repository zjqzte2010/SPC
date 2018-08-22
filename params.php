<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,
    'autoScore'     => [
        //是否打开自动评分
        'open'  => false,
        //是否转化为灰度图片比较
        'dark'  => false,
        //是否缩放至800*600比较
        'resize'=> false,
        //是否压缩图片比较，压缩率为
        'compress' => 0.8,
        //自动评分请求时间间隔
        'interval' => 2000,
    ]
];
