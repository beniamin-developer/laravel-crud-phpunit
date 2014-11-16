<?php

namespace Repository;

interface AuthorizationValidatorInterface
{
    public function passes($event);
    public function messages($event);
    public function on($event);
}