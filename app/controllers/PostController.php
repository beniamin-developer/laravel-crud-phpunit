<?php
use Illuminate\Support\Facades\Response;
use App\Repository\PostRepositoryInterface;
class PostController extends \BaseController {

    public function __construct(
        PostRepositoryInterface $repository,
        Response $response
    )
    {
        $this->repository = $repository;
        $this->response = $response;
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$post = $this->repository->all();

		return View::make('posts.index')->with('posts', $post);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::all();

        $validate = Validator::make($input, ['title' => 'required', 'description' => 'required']);

        if($validate->fails()) {
            return Redirect::route('posts.create')
                ->withInput()
                ->withErrors($validate->messages());
        }

        $this->repository->create($input);

        return Redirect::route('posts.index')
            ->with('flash', 'Post is save');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $post = $this->repository->find($id);

        return View::make('posts.show')->with('post', $post);
		//return View::make('posts.show')->with('users', $this->repository->getMostPopular());
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}
