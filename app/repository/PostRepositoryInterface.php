<?php

namespace App\Repository;

interface PostRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
}