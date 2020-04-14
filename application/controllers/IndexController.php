<?php

namespace application\controllers;

use application\models\IndexModel;
use config\Config;

class IndexController implements IController
{
    public $path;

    public function __construct()
    {
        $config = new Config();
        $this->path = $config::APP_URL;
    }

    public function indexAction()
    {
        session_start();
        $fc = FrontController::getInstance();
        $model = new IndexModel();
        $output = $model->render(INDEX_PAGE);
        $fc->setBody($output);
    }

    public function twoAction()
    {
        session_start();
        $fc = FrontController::getInstance();
        $model = new IndexModel();
        $output = $model->render(TWO_PAGE);
        $fc->setBody($output);
    }
}