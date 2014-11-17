<?php

class BaseModel extends Eloquent
{
    public $errors;

    public function validate()
    {
        $valid = Validator::make($this->attributes, static::$rules);

        if($valid->passes())
            return true;

        $this->errors = $valid->messages();

        return false;
    }
}