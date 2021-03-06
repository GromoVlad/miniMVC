<?php

namespace Application\Models;

use Config\Config;

class IndexModel
{
    const TITLE = 'Список пользователей';
    const CSS = 'index';
    public $path;

    public function __construct()
    {
         $this->path = Config::APP_URL;
    }

    public function render($file)
    {
        ob_start();
        include($file);
        return ob_get_clean();
    }

}