<?php

namespace App\Helpers;

class MenuHelper extends Helper
{
    public static function checkActive($param)
    {
        if (request()->is($param)) {
            return "active current-page";
        }
    }
}
