<?php

namespace App\Libraries;

class DhivehiLiyun
{

    public function neh($var)
    {
        if ($var == 0 || $var == null) {
            $nethey = "ނެތް";
        } else {
            $nethey = $var;
        }
        return $nethey;
    }
}
