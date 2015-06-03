<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 31.05.15
 * Time: 21:52
 */

namespace App\Lib\Helpers;


class dTools {

    static $checked = array(
        false => '',
        true => 'checked'
    );


    public static function checked($value)
    {
        return self::$checked[(bool)$value];
    }

    public static function notEmpty($string)
    {
        return strlen(trim((string)$string)) > 0 ? true : false;
    }

    public static function get($value)
    {
        return $value ? $value : false;
    }

} 