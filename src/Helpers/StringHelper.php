<?php

namespace OZiTAG\Tager\Backend\Utils\Helpers;

class StringHelper
{
    public static function isJson($string): bool
    {
        $string = (string)$string;

        if(is_numeric($string)) return false;

        json_decode($string);
        return json_last_error() === JSON_ERROR_NONE;
    }
}
