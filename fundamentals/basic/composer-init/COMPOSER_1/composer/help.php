<?php

if(! function_exists('upper'))
{
    function up($value)
    {
    return text\format::upper($value);
    }

}

if(!function_exists('lower'))
    {
        function low($value)
        {
    return text\format::lower($value);
}
    }

