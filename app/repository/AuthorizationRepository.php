<?php

namespace Repository;

class AuthorizationRepository implements AuthorizationRepositoryInterface
{
    public function all(array $modifiers)
    {
        // return all the posts filtered by $modifiers...
    }

    public function first(array $modifiers)
    {
        // return the first post filtered by $modifiers...
    }

    public function insert(array $data)
    {
        // insert posts with $data...
    }

    public function update(array $data, array $modifiers)
    {
        // update posts filtered by $modifiers, with $data...
    }

    public function delete(array $modifiers)
    {
        // delete posts filtered by $modifiers...
    }
}