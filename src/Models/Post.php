<?php

namespace App\Models;

use App\DB;

class Post extends Model {
    static $table = 'posts';
    public $id;
    public $title;
    public $body;



};