<?php namespace App\Repository;

use Illuminate\Http\Request;
use Post;

class EloquentPostRepository implements PostRepositoryInterface
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function all()
    {
        return Post::all();
    }

    public function find($id)
    {
        return Post::find($id);
    }

    public function create()
    {
        $data = [
            "title"     => $this->request->get("title"),
            "description"  => $this->request->get("description"),
        ];

        //var_dump($data);

        return Post::create(array('title'=>'test', 'description' => 'description', 'user_id'=>1));
    }
}