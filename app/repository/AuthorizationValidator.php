<?php

namespace Repository;

class AuthorizationValidator implements AuthorizationValidatorInterface
{
    public function passes($event)
    {
        // validate the event instance...
    }

    public function messages($event)
    {
        // fetch the error messages for the event instance...
    }

    public function on($event)
    {
        // set up the event instance and return it for chaining...
    }
}