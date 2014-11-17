<?php
use \Mockery as Mockery;
use App\Repository\EloquentPostRepository as PostRepository;
use \TestCase;
 
class PostRepositoryTest extends TestCase
{
  public function tearDown()
  {
    //parent::setUp();
    Mockery::close();

    //Artisan::call('migrate:refresh');
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

  public function testCreate()
  {
    $requestMock = $this->getRequestMock();

    $requestMock
        ->shouldReceive("get")
        ->atLeast()
        ->once()
        ->with("title")
    ->andReturn("xxx");

    $requestMock
        ->shouldReceive("get")
        ->atLeast()
        ->once()
        ->with("description")
    ->andReturn("rrr");

    $postRepository = new PostRepository($requestMock);
    $postRepository->create();
  }



  protected function getRequestMock()
  {
    return Mockery::mock("Illuminate\\Http\\Request");
  }
}