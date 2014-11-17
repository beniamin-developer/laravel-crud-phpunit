<?php
use \Mockery as Mockery;
use App\Repository\EloquentPostRepository as PostRepository;
use \TestCase;
 
class PostRepositoryTest extends TestCase
{

    public static function setUpBeforeClass()
    {
        Artisan::call('db:seed');
    }

    public static function tearDownAfterClass()
    {
        Artisan::call('migrate:refresh');
    }

    public function tearDown()
    {
        Mockery::close();
    }

    public function testCreate()
    {
        $findUser = \DB::table('users')->where('first_name', 'beniamin')->first();

        Input::replace($input = [
            'title'         => 'First post',
            'description'   => 'First description for post',
            'userId'        => $findUser->id
        ]);
//
//        $mock = Mockery::mock('App\\Repository\\EloquentPostRepository');
//        $mock->shouldReceive('create')
//            ->with($input);
//
//        $this->app->instance('App\\Repository\\EloquentPostRepository', $mock);
//        $mock->create($input);
//
//        $this->call('POST', 'posts', ['title' => 'First post', 'description' => 'First description for post']);
//        $this->assertResponseOk();


        $postRepository = new PostRepository();
        $create = $postRepository->create(Input::all());

        $this->assertEquals(1, count($create), 'Expected create post is count 1');
    }

    public function testFindById()
    {
        $postRepository = new PostRepository();
        $create = $postRepository->find(1);

        $this->assertNotEmpty($create, 'Expected find post is count 1');
        $this->assertArrayHasKey('title', $create, 'Expected find post key array [title] exist');
        $this->assertArrayHasKey('description', $create, 'Expected find post key array [description] exist');
    }

    public function testFind()
    {
        //$postRepository = new PostRepository();
    }

//  public function testIsValid()
//  {
//    $post = new Post();
//    $post->title = "test";
//    $post->description = "test";
//
//    $this->assertTrue($post->validate(), 'Expected validation to pass.');
//  }

//  public function testIsInvalid()
//  {
//    $post = new Post();
//
//    $this->assertFalse($post->validate(), 'Expected validation to fail');
//  }

//  public function testAll()
//  {
//    $mock = Mockery::mock('PostRepository');
//
//    $mock->shouldReceive('all')->once();
//    $this->call('GET', 'posts');
//
//    $this->assertResponseOk();
//  }
}