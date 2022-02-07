<?php

namespace OZiTAG\Tager\Backend\Utils\Helpers;

class UUID
{
    public static function get($version = 4): string
    {
        if ($version != 4) {
            throw new \Exception('Not Supported');
        }

        return \Ramsey\Uuid\Uuid::uuid4()->toString();
    }
}
