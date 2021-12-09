<?php

namespace ti2018b\phpmvc\exception;

use Exception;

/**
 * Class ForbiddenException
 * 
 * @author Aris Saputra <arissaputra362@gmail.com>
 * @package ti2018b\phpmvc\exception
 */
class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}
