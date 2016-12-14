<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/12/14
 * Time: 下午2:14
 */
namespace Core;
class Model extends \PDO
{
    public function __construct()
    {
        $db_config = Config::all('database');
        $dsn = 'mysql:host=localhost;dbname=chat';
        $username = 'root';
        $passwd = '';
        try {
            parent::__construct($dsn, $username, $passwd);
        } catch (\PDOException $exception) {
            p($exception->getMessage());
        }

    }
}