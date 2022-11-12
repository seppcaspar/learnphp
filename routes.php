<?php

use App\Controllers\ArticleController;
use App\Controllers\PublicController;
use App\Router;

Router::get('/', [PublicController::class, 'index']);
Router::get('/page1', [PublicController::class, 'page1']);
Router::get('/page2', [PublicController::class, 'page2']);
Router::get('/articles', [ArticleController::class, 'index']);
Router::get('/articles/create', [ArticleController::class, 'create']);
Router::post('/articles', [ArticleController::class, 'store']);
Router::get('/articles/view', [ArticleController::class, 'view']);
Router::get('/articles/edit', [ArticleController::class, 'edit']);
Router::post('/articles/update', [ArticleController::class, 'update']);
Router::get('/articles/delete', [ArticleController::class, 'delete']);