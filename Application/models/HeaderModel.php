<?php

use Config\Config;

class HeaderModel
{
    public $path;
    public $string;

    public function __construct()
    {
        $this->path = Config::APP_URL;
    }

}