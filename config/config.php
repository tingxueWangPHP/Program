<?php
/*数据库配置参数*/
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PWD', 'root');
define('DB_NAME', 'test');
define('DB_PORT', '3306');
define('DB_CHAR', 'UTF8');

/*时区设置*/
define('TIMEZONE_SET', 'Asia/Shanghai');  //时区设置，为上海时区

/*文件上传*/
define('UPLOAD_PATH', 'uploads/');  //上传路径
define('FILE_MAX_SIZE', 1000000);  //最大文件大小(KB)

/*阿里云账户*/
define('APPCODE', 'Authorization:APPCODE 41b6993dcf3c41beaafe59cbe49325f9');
define('QUE_URL', 'http://jisujiakao.market.alicloudapi.com/driverexam/query');

/*REDIS内存缓存*/
define('REDIS_HOST', '127.0.0.1');
define('REDIS_PORT', 6379);
