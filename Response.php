<?php

namespace app\app;

/**
 * Class Response
 * 
 * @author Aris Saputra <arissaputra362@gmail.com>
 * @package app\app
 */
class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect(string $url)
    {
        header('Location: ' . $url);
    }
}
