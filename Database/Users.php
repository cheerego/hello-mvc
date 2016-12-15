<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/12/15
 * Time: 下午2:33
 */
require_once '../vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection(require_once '../App/Config/database.php');
$capsule->setAsGlobal();
$capsule->bootEloquent();
Capsule::schema()->create('hes', function( $table)
{
    $table->increments('id');
    $table->string('email')->unique();
    $table->timestamps();
});