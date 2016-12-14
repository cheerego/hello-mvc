<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/12/14
 * Time: 下午2:29
 */
namespace Core;

class BaseController
{
    public $assign;

    public function assign($data)
    {
        foreach ($data as $key => $value) {
            $this->assign[$key] = $value;
        }
    }

    public function display($view)
    {
        $file = APP . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . $view;
        if (file_exists($file)) {
            //TODO
//            extract($this->assign);
//            require_once $file;
            \Twig_Autoloader::register();

            $loader = new \Twig_Loader_Filesystem(APP.DIRECTORY_SEPARATOR.'Views');
            $twig = new \Twig_Environment($loader, array(
                'cache' => APP_PATH.DIRECTORY_SEPARATOR.'Storage'.DIRECTORY_SEPARATOR.'Twig',
                'debug'=>DEBUG
            ));
            $template = $twig->load($view);
            $template->display($this->assign);
        } else {
            throw new \Exception('找不到该试图' . $file);
        }
    }

    public function redirect($controller_action, $data)
    {
        //TODO
    }
}