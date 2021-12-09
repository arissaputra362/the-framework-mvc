<?php

namespace app\app\form;


/**
 * Class TextareaField
 * 
 * @author Aris Saputra <arissaputra362@gmail.com>
 * @package app\app\form
 */
class TextareaField extends BaseField
{
    public function renderInput(): string
    {
        return sprintf(
            '<textarea name="%s" class="form-control %s">%s</textarea>',
            $this->attribute,
            $this->model->hasError($this->attribute) ? 'is-invalid' : '',
            $this->model->{$this->attribute}
        );
    }
}
