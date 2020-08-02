<?php

namespace OZiTAG\Tager\Backend\Utils\Formatters;

class ExceptionFormatter
{
    /**
     * @param \Exception $exception
     * @return string
     */
    public static function getMessageWithFileInfo(\Exception $exception)
    {
        return $exception->getMessage() . ' (' . $exception->getFile() . ', line ' . $exception->getLine() . ')';
    }

    /**
     * @param \Exception $exception
     * @return string
     */
    public static function getFullExceptionInfo(\Exception $exception)
    {
        return (string)$exception;
    }
}