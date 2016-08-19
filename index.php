<?php

//定义项目名称
define('APP_NAME','home');

//定义项目路径
define('APP_PATH','./home/');

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

//定义路径常量
define('CONST_PATH','./Public/home');

//开启调试模式
define('APP_DEBUG',true);

//加载框架入口文件
require'./ThinkPHP/ThinkPHP/ThinkPHP.php';

?>