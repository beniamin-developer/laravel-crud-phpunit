<?php

namespace Repository;

interface AuthorizationRepositoryInterface
{
    public function all(array $modifiers);
    public function first(array $modifiers);
    public function insert(array $data);
    public function update(array $data, array $modifiers);
    public function delete(array $modifiers);
}