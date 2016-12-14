<?php

/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/12/13
 * Time: 下午7:48
 */
namespace Core;
use App\Controller\IndexController;
use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\DebugClassLoader;

class Bootstrap
{
    private static $classList = [];

    public static function run()
    {
        self::debug();
        $route = new Route();
        $controller = $route->controller;
        $action = $route->action;
        $controllerFile = APP . DIRECTORY_SEPARATOR.'Controllers'.DIRECTORY_SEPARATOR . ucfirst($controller) . 'Controller.php';
        if (file_exists($controllerFile)) {
//            require_once $controllerFile;
            (new IndexController())->$action();
        } else {
            throw new \Exception("找不到控制器" . $controllerFile);
        }


    }

    public static function load($class)
    {
        if (isset($classList[$class])) {
            return true;
        } else {
            $class = str_replace('\\', '/', $class);
            $file = APP_PATH . DIRECTORY_SEPARATOR . $class . '.php';
            if (file_exists($file)) {
                require_once $file;
                self::$classList[$class] = $class;
            } else {
                return false;
            }
        }
    }


    public static function debug()
    {
        if (DEBUG) {
            Debug::enable();
            ErrorHandler::register();
            DebugClassLoader::enable();
        } else {
            ini_set('display_errors', 0);
            error_reporting(0);
        }

    }


}