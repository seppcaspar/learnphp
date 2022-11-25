<?php

use App\Models\User;

function view($viewName, $vars=[]){
    extract($vars);
    include "views/$viewName.php";
}

function auth(){
    return User::auth();
}