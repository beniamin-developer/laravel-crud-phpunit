@extends('layouts.main')

@section('content')
<h1>Create a Post</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'posts')) }}

    <div class="form-group">
        {{ Form::label('Title', 'Title') }}
        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create new post', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@stop