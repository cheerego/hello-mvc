<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/12/13
 * Time: 下午7:43
 */

function p($val)
{
    if (is_bool($val)) {
        var_dump($val);
    } else if (is_null($val)) {
        var_dump(null);
    } else {
        echo "<pre style='position: relative;z-index: 1000;padding: 10px;border-radius: 5px;background: #f5f5f5;border: 1px solid #aaa;font-size: 14px;line-height: 18px;opacity: 0.9;'>"
            . print_r($val, true)
            . "</pre>";
    }
}