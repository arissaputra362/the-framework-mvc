<?php

namespace ti2018b\phpmvc\form;

use ti2018b\phpmvc\Model;
use ti2018b\phpmvc\form\Field;

/**
 * Class Form
 * 
 * @author Aris Saputra <arissaputra362@gmail.com>
 * @package ti2018b\phpmvc\form
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
