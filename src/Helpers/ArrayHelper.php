<?php

namespace OZiTAG\Tager\Backend\Utils\Helpers;

class ArrayHelper
{
    /**
     * @param $arr
     * @return bool
     */
    public static function isAssoc($arr)
    {
        if (!is_array($arr) || array() === $arr) return false;
        return array_keys($arr) !== range(0, count($arr) - 1);
    }
}
