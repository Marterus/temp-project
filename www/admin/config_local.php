<?php
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : "local.muzline.ua";
// HTTP
define('HTTP_SERVER', 'http://'.$host.'/admin/');
define('HTTP_CATALOG', 'http://'.$host.'/');

// HTTPS
define('HTTPS_SERVER', 'http://'.$host.'/admin/');
define('HTTPS_CATALOG', 'http://'.$host.'/');

// DIR
$dir = dirname(dirname(__FILE__));
define('DIR_APPLICATION', $dir.'/admin/');
define('DIR_SYSTEM', $dir.'/system/');
define('DIR_LANGUAGE', $dir.'/admin/language/');
define('DIR_TEMPLATE', $dir.'/admin/view/template/');
define('DIR_CONFIG', $dir.'/system/config/');
define('DIR_IMAGE', $dir.'/image/');
define('DIR_CACHE', $dir.'/system/storage/cache/');
define('DIR_DOWNLOAD', $dir.'/system/storage/download/');
define('DIR_LOGS', $dir.'/system/storage/logs/');
define('DIR_MODIFICATION', $dir.'/system/storage/modification/');
define('DIR_UPLOAD', $dir.'/system/storage/upload/');
define('DIR_CATALOG', $dir.'/catalog/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'db');
define('DB_USERNAME', 'local');
define('DB_PASSWORD', 'local');
define('DB_DATABASE', 'local');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

define('CACHE_DRIVER', 'redis'); 
define('CACHE_HOSTNAME', 'redis');
define('CACHE_PORT', '6379');
define('CACHE_PREFIX', 'oc_');

define('COOKIE_DOMAIN', '.local.muzline.ua');

//REDIS
define('REDIS_HOSTNAME', 'redis');
define('REDIS_PORT', '6379');