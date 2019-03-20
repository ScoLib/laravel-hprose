<?php
return [
    /*
    |--------------------------------------------------------------------------
    | 客户端参数设置
    |--------------------------------------------------------------------------
    |
    | @see https://github.com/hprose/hprose-php/wiki/05-Hprose-%E5%AE%A2%E6%88%B7%E7%AB%AF
    */
    'client' => [
        'url'   => env("HPROSE_CLIENT_URL", '127.0.0.1'),
        "async" => env("HPROSE_CLIENT_ASYNC", false),
    ],

    /*
    |--------------------------------------------------------------------------
    | 服务端参数设置
    |--------------------------------------------------------------------------
    |
    | @see https://github.com/hprose/hprose-php/wiki/08-HTTP-%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%89%B9%E6%AE%8A%E8%AE%BE%E7%BD%AE
    */
    "server" => [
        "CrossDomainEnabled" => env("HPROSE_CROSS_DOMAIN", false),
        "DebugEnabled"       => env("APP_DEBUG", false),
        "P3PEnabled"         => env("HPROSE_P3P", false),
        "GetEnabled"         => env("HPROSE_GET", true),
    ],
];
