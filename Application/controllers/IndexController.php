<?php

namespace Application\Controllers;

use Application\Models\IndexModel;
use Config\Config;

class IndexController implements IController
{
    public $path;
    private $fc;
    private $model;

    public function __construct()
    {
        $this->path = Config::APP_URL;
        session_start();
        $this->fc = FrontController::getInstance();
        $this->model = new IndexModel();
    }

    public function indexAction()
    {
        $output = $this->model->render(INDEX_PAGE);
        $this->fc->setBody($output);
    }

    public function twoAction()
    {
        $output = $this->model->render(TWO_PAGE);
        $this->fc->setBody($output);
    }
}