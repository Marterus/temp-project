<?php
 
// HTTP
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : "local.muzline.ua";
define('NEW_DOMAIN', 'http://local.muzline.ua/');
define('MAIN_DOMAIN', 'local.muzline.ua');
define('HTTP_SERVER', 'http://'.$host.'/');
define('HTTPS_SERVER', 'http://'.$host.'/');
define('HTTP_IMAGE', 'http://img.local.muzline.ua/image/');
define('HTTPS_IMAGE', 'http://img.local.muzline.ua/image/');

// DIR
$dir = dirname(__FILE__);
define('DIR_APPLICATION', $dir .'/catalog/');
define('DIR_SYSTEM', $dir .'/system/');
define('DIR_LANGUAGE', $dir .'/catalog/language/');
define('DIR_TEMPLATE', $dir .'/catalog/view/theme/');
define('DIR_CONFIG', $dir .'/system/config/');
define('DIR_IMAGE', $dir .'/image/');
define('DIR_CACHE', $dir .'/system/storage/cache/');
define('DIR_DOWNLOAD', $dir .'/system/storage/download/');
define('DIR_LOGS', $dir .'/system/storage/logs/');
define('DIR_MODIFICATION', $dir .'/system/storage/modification/');
define('DIR_UPLOAD', $dir .'/system/storage/upload/');

define('PRODUCT_CHUNK', $dir .'/catalog/view/theme/OPC070174/template/product/product_chunk.tpl');
define('PRODUCT_CHUNK_EMAIL', $dir .'/catalog/view/theme/OPC070174/template/product/product_chunk_email.tpl');
define('PRODUCT_SLIDER_CHUNK', $dir .'/catalog/view/theme/OPC070174/template/product/product_slider_chunk.tpl');

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