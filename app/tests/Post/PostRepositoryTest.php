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

    public function testAll()
    {
        $data = array(
            'posts' => array(
                array(
                    "id" => "1",
                    "title" => "title 1",
                    "user" => array(
                        "email" => "arosa.developer@gmail.com"
                    )
                ),
                array(
                    "id" => "2",
                    "title" => "title 2",
                    "user" => array(
                        "email" => "arosa.developer@gmail.com"
                    )
                )
            )
        );

        $mock = Mockery::mock('App\\Repository\\PostRepositoryInterface');

        $mock->shouldReceive('all')
            ->once()
            ->andReturnValues($data);

        $this->app->instance('App\\Repository\\PostRepositoryInterface', $mock);

        $response = $this->call('GET', 'posts');

        $view = $response->getOriginalContent();

        $this->assertEquals(2, count($view['posts']));
        $this->assertContains("title 1", $view['posts'][0]['title']);
        $this->assertContains("title 2", $view['posts'][1]['title']);
    }

    public function testFindById()
    {
        $data = array(
            "title" => "Title 1",
            "description" => "Description",
            "user" => array(
                "email" => "arosa.developer@gmail.com"
            )
        );

        $mock = Mockery::mock('App\\Repository\\PostRepositoryInterface');

        $mock->shouldReceive('find')
            ->with('1')
            ->once()
            ->andReturn($data);

        $this->app->instance("App\\Repository\\PostRepositoryInterface", $mock);

        $response = $this->call('GET', 'posts/1');

        $view = $response->getOriginalContent();

        $this->assertContains("Title 1", $view['post']['title']);
        $this->assertContains("Description", $view['post']['description']);
        $this->assertContains("arosa.developer@gmail.com", $view['post']['user']['email']);
    }

    public function testCreate()
    {
        $findUser = \DB::table('users')->where('first_name', 'beniamin')->first();

        Input::replace($input = [
            'title'         => 'First post',
            'description'   => 'First description for post',
            'userId'        => $findUser->id
        ]);

        $postRepository = new PostRepository();
        $create = $postRepository->create(Input::all());

        $this->assertEquals(1, count($create), 'Expected create post is count 1');
    }
}