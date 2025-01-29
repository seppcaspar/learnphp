<?php

namespace App\Exceptions;

use Exception;

class NotFoundExceptions extends Exception {
    protected $messege = '404 Not Found';
    protected $code = 404;
}