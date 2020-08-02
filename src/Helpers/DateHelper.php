<?php

namespace OZiTAG\Tager\Backend\Utils\Helpers;

class DateHelper
{
    public static function getDbDateTime($timestamp = null)
    {
        return date('Y-m-d H:i:s', $timestamp ? $timestamp : time());
    }

    public static function getHumanDateTime($timestamp = null)
    {
        return date('Y-m-d H:i:s', $timestamp ? $timestamp : time());
    }
}
