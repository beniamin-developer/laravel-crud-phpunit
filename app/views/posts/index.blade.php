@extends('layouts.main')

@section('content')
<h1>Show all posts</h1>

<table>
    <thead>
        <tr>
            <td>Title</td>
            <td>Autor</td>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>
                <a href="{{ URL::route('posts.show', array($post['id'])) }}">{{$post['title']}}</a>
            </td>
            <td>{{$post['user']['email']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop