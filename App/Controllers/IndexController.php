<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/12/14
 * Time: 下午1:59
 */
namespace App\Controller;

use App\Model\User;
use Core\BaseController;
use Core\Config;
use Core\Model;
use Illuminate\Database\Capsule\Manager as Capsule;
class IndexController extends BaseController
{

    public function __construct()
    {
    }

    public function index()
    {
        $this->assign(['data'=>'asdasd','title'=>"title"]);
        $this->display('index.twig');

    }
}