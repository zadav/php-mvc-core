<?php


namespace zadav\framework\core\form;


use zadav\framework\core\Model;

abstract class BaseField
{
    public Model $model;
    public string $attribute;

    public function __construct(Model $model, $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    abstract public function renderInput(): string;

    /**
     * @return string
     */
    public function __toString(): string
    {
        return sprintf('
            <div class="form-group">
                <label class="form-label">%s</label>
                %s    
                <div class="invalid-feedback">
                    %s
                </div>
            </div>',
            $this->model->getLabel($this->attribute),
            $this->renderInput(),
            $this->model->getFirstError($this->attribute)
        );
    }
}