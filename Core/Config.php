<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/12/14
 * Time: 下午3:53
 */
/**
 * 配置文件获取类
 */
namespace Core;
class Config
{
    //用于缓存 判断是否加载
    public static $Conf = [];

    /**
     * @param $name 需要获得的配置值PASSWORD
     * @param $type 需要获得的配置类型如route database
     */
    public static function get($name, $type)
    {

    }

    /**
     * @param $type 获取所有某个类型的所有配置如database
     */
    public static function all($type)
    {
        //判断缓存是否加载了该配置
        if (isset(self::$Conf[ $type])) {
            return self::$Conf[$type];
        }
        //没有缓存
        //判断是否有配置文件，有则引入 没有抛出异常
        $file = APP . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . $type . ".php";
        if (file_exists($file)) {
            $config = require_once $file;
            self::$Conf[$type] = $config;
            return self::$Conf[$type];
        } else {
            throw  new \Exception("没有找到该配置文件" . $file);
        }
    }

}