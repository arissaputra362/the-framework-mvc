<?php

namespace ti2018b\phpmvc\form;

use ti2018b\phpmvc\Model;

/**
 * Class Field
 * 
 * @author Aris Saputra <arissaputra362@gmail.com>
 * @package ti2018b\phpmvc\form
 */
abstract class BaseField
{
    public Model $model;
    public string $attribute;

    /**
     * Field constructor
     * 
     * @param \ti2018b\phpmvc\Model $model
     * @param string         $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    abstract public function renderInput(): string;

    public function __toString()
    {
        return sprintf(
            '
            <div class="form-group">
                <label for="lastname">%s</label>
                %s
                <div class="invalid-feedback">
                    %s
                </div>
            </div>
        ',
            $this->model->getLabel($this->attribute),
            $this->renderInput(),
            $this->model->getFirstError($this->attribute)
        );
    }
}
