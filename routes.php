<?php

use App\Controllers\ArticleController;
use App\Controllers\PublicController;
use App\Router;

Router::addRoute('/', [PublicController::class, 'index']);
Router::addRoute('/page1', [PublicController::class, 'page1']);
Router::addRoute('/page2', [PublicController::class, 'page2']);
Router::addRoute('/articles', [ArticleController::class, 'index']);

