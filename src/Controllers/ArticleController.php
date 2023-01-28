<?php

namespace App\Controllers;

use App\DB;
use App\Models\Article;
use App\Models\User;

class ArticleController {

    public function index(){
        dump('hello dumper');
        $articles = Article::all();
        view('articles/index', compact('articles'));
    }

    public function create(){
        view('articles/create');
    }

    public function store(){
        dump($_POST);
        dump($_FILES);
        $extentention = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $filename = md5(time() . $_FILES['file']['name']) . '.' . $extentention;
        move_uploaded_file($_FILES['file']['tmp_name'], __DIR__ . '/../../public/' . $filename);
        die();
        $article = new Article();
        $article->title = $_POST['title'];
        $article->body = $_POST['body'];
        $article->save();
        header('Location: /articles');
    }

    public function view(){
        $article = Article::find($_GET['id']);
        if($article){
            view('articles/view', compact('article'));
        } else {
            http_response_code(404);
            echo '404';
        }
    }

    public function edit(){
        $article = Article::find($_GET['id']);
        if($article){
            view('articles/edit', compact('article'));
        } else {
            http_response_code(404);
            echo '404';
        }
    }

    public function update(){
        $article = Article::find($_GET['id']);
        $article->title = $_POST['title'];
        $article->body = $_POST['body'];
        $article->save();
        header('Location: /articles');
    }

    public function delete(){
        $article = Article::find($_GET['id']);
        $article->delete();
        header('Location: /articles');
    }
}