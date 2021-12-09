<?php

namespace app\app\form;

use app\app\Model;
use app\app\form\Field;

/**
 * Class Form
 * 
 * @author Aris Saputra <arissaputra362@gmail.com>
 * @package app\app\form
 */
class Form
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
    }

    public function field(Model $model, $attribute)
    {
        return new InputField($model, $attribute);
    }
}
