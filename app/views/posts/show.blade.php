@extends('layouts.main')

@section('content')
<h1>{{$post['title']}}</h1>
<h3>{{$post['description']}}</h3>
<h4>Autor - {{$post['user']['email']}}</h4>
@stop