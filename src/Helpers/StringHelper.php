<?php

namespace OZiTAG\Tager\Backend\Utils\Helpers;

class StringHelper
{
    public static function isJson($string): bool
    {
        $string = (string)$string;
        json_decode($string);
        return json_last_error() === JSON_ERROR_NONE;
    }

    public static function getHumanDateTime($timestamp = null)
    {
        return date('Y-m-d H:i:s', $timestamp ? $timestamp : time());
    }
}
