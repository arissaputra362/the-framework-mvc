<?php

namespace app\app\exception;

use Exception;

/**
 * Class NotFoundException
 * 
 * @author Aris Saputra <arissaputra362@gmail.com>
 * @package app\app\exception
 */
class NotFoundException extends \Exception
{
    protected $message = 'Page Not Found';
    protected $code = 404;
}
