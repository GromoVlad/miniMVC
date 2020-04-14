<?php

namespace application\models;

use config\Config;

class IndexModel
{
    const TITLE = 'Список пользователей';
    const CSS = 'index';
    public $path;

    public function __construct()
    {
        $config = new Config();
        $this->path = $config::APP_URL;
    }

    public function render($file)
    {
        ob_start();
        include($file);
        return ob_get_clean();
    }

}