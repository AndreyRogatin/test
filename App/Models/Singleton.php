<?php

namespace App\Models;


class Singleton
{
    protected static $instance;

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    public static function getInstance()
    {
        if (isset(static::$instance)) {
            return static::$instance;
        } else {
            return new static();
        }
    }
}