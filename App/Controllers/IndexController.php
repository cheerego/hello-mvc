<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/12/14
 * Time: 下午1:59
 */
namespace App\Controller;

use Core\BaseController;
use Core\Model;

class IndexController extends BaseController
{

    public function __construct()
    {
    }

    public function index()
    {

//        $db = new Model();
//        $res = $db->query('select * from users');
//        var_dump($res->fetchAll());
        $this->assign(['data'=>"data",'title'=>"title"]);
        $this->display('index.php');

    }
}