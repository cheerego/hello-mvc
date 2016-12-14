<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/12/13
 * Time: 下午6:48
 */
//项目根目录的绝对路径
define('APP_PATH', dirname(__FILE__));
define('CORE', APP_PATH . '/Core');
define('APP', APP_PATH . '/App');
define('DEBUG', true);


require_once 'vendor/autoload.php';


//require_once CORE . '/Common/function.php';
//require_once CORE . '/Bootstrap.php';
//设置自动导入
//spl_autoload_register('\Core\Bootstrap::load');
//使用symfon/debug


if (DEBUG) {
//    ini_set('display_errors', 1);
//    error_reporting(E_ALL ^ E_STRICT);
    \Core\Bootstrap::debug();
} else {
    //关闭错误 报错就是500错误
    ini_set('display_errors', 0);
    error_reporting(0);
}
//启动框架
\Core\Bootstrap::run();