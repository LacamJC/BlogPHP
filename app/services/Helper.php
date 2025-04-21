<?php

namespace App\Services;

class Helper
{
    private function __construct() {}

    public static function url($path){
        return '/blog/public/' . ltrim($path, '/');
    }
}
