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
        extract(Config::all('database'));
        $dsn = $TYPE . ':' . 'host=' . $HOST . ';' . 'dbname=' . $DBNAME . ';' . 'charset=' . $CHARSET;
        $username = $USERNAME;
        $passwd = $PASSWORD;
        try {
            parent::__construct($dsn, $username, $passwd);
        } catch (\PDOException $exception) {
            throw new \PDOException($exception->getMessage());
        }

    }
}