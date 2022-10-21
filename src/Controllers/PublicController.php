<?php

namespace App\Controllers;

class PublicController {

    public function index(){
        view('index');
    }

    public function page1(){
        view('page1');
    }

    public function page2(){
        view('page2');
    }
}