<?php

class HeaderModel
{
    public $path;
    public $string;

    public function __construct()
    {
        $config = new Config();
        $this->path = $config::APP_URL;
    }

}