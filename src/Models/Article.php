<?php

namespace App\Models;

class Article {
    public function snippet(){
        return substr($this->body,0,2);
    }
}