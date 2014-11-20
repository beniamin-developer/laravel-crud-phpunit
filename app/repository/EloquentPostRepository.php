<?php namespace App\Repository;

use Illuminate\Http\Request;
use Post;

class EloquentPostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::all();
    }

    public function find($id)
    {
        return Post::find($id);
    }

    public function create(array $data)
    {
        return Post::create(
            $data
        );
    }

    public function getMostPopular()
    {
        return array('test');
    }
}