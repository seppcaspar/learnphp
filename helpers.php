<?php

function view($viewName, $vars=[]){
    extract($vars);
    include "views/$viewName.php";
}