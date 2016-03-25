<?php
define('ROOT_PATH', __DIR__ . '/../');
define('THINK_PATH',  __DIR__ . '/../vendor/topthink/thinkng/');
//加载路径常量
include __DIR__ . '/paths.php';
require __DIR__ . '/../vendor/autoload.php';

require THINK_PATH . '/src/start.php';

//设置时间戳
date_default_timezone_set('Asia/shanghai');