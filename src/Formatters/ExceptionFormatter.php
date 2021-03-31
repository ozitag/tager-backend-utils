<?php

namespace OZiTAG\Tager\Backend\Utils\Formatters;

class ExceptionFormatter
{
    /**
     * @param \Throwable $exception
     * @return string
     */
    public static function getMessageWithFileInfo(\Throwable $exception)
    {
        return $exception->getMessage() . ' (' . $exception->getFile() . ', line ' . $exception->getLine() . ')';
    }

    /**
     * @param \Throwable $exception
     * @return string
     */
    public static function getFullExceptionInfo(\Throwable $exception)
    {
        return (string)$exception;
    }
}