@extends('layout.app')

@section('content')
<a href="/posts" class="btn btn-secondary">Go Back</a>
<h1>{{$post->title}}</h1>
  <p class="lead">{!!$post->body!!}</p>
  <small>Written on {{$post->created_at}}</small>
</br>
  <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>

  {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
  {{form::hidden('_method', 'DELETE')}}
  {{Form::submit('Delete', ['class'=>'btn btn-secondary'])}}
  {!! Form::close() !!}
@endsection