<?php

namespace OZiTAG\Tager\Backend\Utils\Helpers;

class ArrayHelper
{
    /**
     * @param array $arr
     * @return bool
     */
    public static function isAssoc(array $arr)
    {
        if (array() === $arr) return false;
        return array_keys($arr) !== range(0, count($arr) - 1);
    }
}
