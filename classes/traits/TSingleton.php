<?php

namespace classes\traits;

trait TSingleton
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance(...$args) {
        if (self::$instance === null) {
            self::$instance = new self(...$args);
        }
        return self::$instance;
    }
}