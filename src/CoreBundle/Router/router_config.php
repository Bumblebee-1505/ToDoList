<?php

use Src\CoreBundle\Router\Router;
use Src\ProfileBundle\Controller\ProfileController;

// Добавляем маршруты
Router::add('/main', ProfileController::class, 'show');

Router::add('/auth', ProfileController::class, 'show');

Router::add('/profile', ProfileController::class, 'show');

Router::add('/profile', ProfileController::class, 'show');