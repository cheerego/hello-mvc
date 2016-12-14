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


//启动框架
\App\Bootstrap::run();

