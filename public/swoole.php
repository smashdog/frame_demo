#!/usr/bin/env php
<?php

define('ROOT', __DIR__.'/../');
define('SWOOLE', 1);

require ROOT.'/vendor/autoload.php';

if (!function_exists('go')) {
    exit('请先安装swoole扩展');
}

$http = new Swoole\Http\Server('127.0.0.1', 9501);
$http->on('request', function ($request, $response) {
    $msg = init_frame($request);
    $response->write($msg);
    $response->end();
});
$http->start();
