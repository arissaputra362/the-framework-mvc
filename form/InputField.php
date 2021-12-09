<?php

namespace ti2018b\phpmvc\form;

use ti2018b\phpmvc\Model;

/**
 * Class InputField
 * 
 * @author Aris Saputra <arissaputra362@gmail.com>
 * @package ti2018b\phpmvc\form
 */
class InputField extends BaseField
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';

    public string $type;

    /**
     * Field constructor
     * 
     * @param \ti2018b\phpmvc\Model $model
     * @param string         $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        parent::__construct($model, $attribute);
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function renderInput(): string
    {
        return sprintf(
            '<input type="%s" name="%s" value="%s" class="form-control %s" id="lastname">',
            $this->type,
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? 'is-invalid' : '',
        );
    }
}
