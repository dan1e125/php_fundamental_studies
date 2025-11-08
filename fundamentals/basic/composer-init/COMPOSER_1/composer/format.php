<?php

namespace text;

class format
{
    public static function upper($value)
    {
        return strtoupper($value);
    }

    public static function lower($value)
    {
        return strtolower($value);
    }
}