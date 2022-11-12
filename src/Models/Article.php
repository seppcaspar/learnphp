<?php

namespace App\Models;

use App\DB;

class Article extends Model {
    protected static $table = 'articles';
    
    public function snippet(){
        return substr($this->body,0,2);
    }


}