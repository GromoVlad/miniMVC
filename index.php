<?php

use application\controllers\FrontController;

/* Подключает автозагрузчик */
require_once __DIR__ . '/vendor/autoload.php';

/* Имена файлов: views */
define('INDEX_PAGE', __DIR__ . '\application\views\title.php');
define('TWO_PAGE', __DIR__ . '\application\views\two.php');
define('NOT_FOUND_PAGE', __DIR__ . '\application\views\404.php');
define('DEVELOP_PAGE', __DIR__ . '\application\views\develop.php');

/* Инициализация и запуск FrontController */
$front = FrontController::getInstance();
$front->route();

/* Вывод данных */
echo $front->getBody();