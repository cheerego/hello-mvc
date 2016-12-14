<?php

/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/12/13
 * Time: 下午7:48
 */
use Core\Route;

class Bootstrap
{
    private static $classList = [];

    public static function run()
    {
        $route = new Route();
        $controller = $route->controller;
        $action = $route->action;
        $controllerFile = APP.'/Controllers/'.ucfirst($controller).'Controller.php';
        if (is_file($controllerFile)) {
            require_once $controllerFile;
            (new App\Controller\IndexController())->$action();
        } else {
            throw new Exception("找不到控制器" . $controllerFile);
        }
    }

    public static function load($class)
    {
        if (isset($classList[$class])) {
            return true;
        } else {
            $class = str_replace('\\', '/', $class);
            $file = APP_PATH . '/' . $class . '.php';
            if (is_file($file)) {
                require_once $file;
                self::$classList[$class] = $class;
            } else {
                return false;
            }
        }
    }
}