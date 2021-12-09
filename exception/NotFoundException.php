<?php

namespace ti2018b\phpmvc\exception;

use Exception;

/**
 * Class NotFoundException
 * 
 * @author Aris Saputra <arissaputra362@gmail.com>
 * @package ti2018b\phpmvc\exception
 */
class NotFoundException extends \Exception
{
    protected $message = 'Page Not Found';
    protected $code = 404;
}
