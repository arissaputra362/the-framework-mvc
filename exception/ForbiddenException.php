<?php

namespace app\app\exception;

use Exception;

/**
 * Class ForbiddenException
 * 
 * @author Aris Saputra <arissaputra362@gmail.com>
 * @package app\app\exception
 */
class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}
