<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/12/14
 * Time: 下午1:59
 */
namespace App\Controller;

use Core\BaseController;
use Core\Config;
use Core\Model;

class IndexController extends BaseController
{

    public function __construct()
    {
    }

    public function index()
    {
//        p(Config::all('database'));

//        $db = new Model();
//        $res = $db->query('select * from users');
//        var_dump($res->fetchAll());
        $this->assign(['data'=>"asdasdasd",'title'=>"title"]);
        $this->display('index.twig');

    }
}