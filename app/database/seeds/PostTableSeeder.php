<?php

class PostTableSeeder extends Seeder {

    public function run()
    {
        $user = User::find(1);

        $post1 = new Post();
        $post1->title = "Title 1";
        $post1->description = "Description 1";
        $post1->user()->associate($user);
        $post1->save();

        $post2 = new Post();
        $post2->title = "Title 2";
        $post2->description = "Description 2";
        $post2->user()->associate($user);
        $post2->save();

        $post3 = new Post();
        $post3->title = "Title 3";
        $post3->description = "Description 3";
        $post3->user()->associate($user);
        $post3->save();

        $post4 = new Post();
        $post4->title = "Title 4";
        $post4->description = "Description 4";
        $post4->user()->associate($user);
        $post4->save();

        $post5 = new Post();
        $post5->title = "Title 5";
        $post5->description = "Description 5";
        $post5->user()->associate($user);
        $post5->save();
    }

}