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
            [
                'title'         => $data['title'],
                'description'   => $data['description'],
                'user_id'       => $data['userId']
            ]
        );
    }
}