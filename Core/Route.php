<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/12/14
 * Time: 上午11:48
 */
namespace Core;

class Route
{
    public $controller;
    public $action;

    public function __construct()
    {
        //xxx.com/index/index
        // 重写

        if (isset($_SERVER['PATH_INFO']) && $_SERVER['REQUEST_URI'] != '/') {
            $pathArr = explode('/', trim($_SERVER['PATH_INFO'], '/'));

            if (isset($pathArr[0])) {
                $this->controller = $pathArr[0];
                array_splice($pathArr, 0, 1);
            }
            if (isset($pathArr[1])) {
                $this->action = $pathArr[1];
                array_splice($pathArr, 0, 1);
            } else {
                $this->action = 'index';
            }
            $count = count($pathArr);
            $count = $count % 2===0 ? $count : $count - 1;


            for ($i = 0; $i < $count; $i=$i+2) {
                $_GET[$pathArr[$i]] = $pathArr[$i + 1];
            }

        } else {
            $this->controller = 'index';
            $this->action = 'index';
        }
    }
}