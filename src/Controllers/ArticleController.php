<?php

namespace App\Controllers;

class ArticleController {

    public function index(){
        $articles = [
            'text1',
            'text2',
            'text3'
        ];
        view('articles/index', compact('articles'));
    }
}