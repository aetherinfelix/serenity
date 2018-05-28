@extends('layout.app')

@section('content')
<a href="/posts" class="btn btn-secondary">Go Back</a>
</br>
</br>
<div class="container">
        <div class="row">
                <div class="col-4"><img class="img-thumbnail" src="/storage/cover_images/{{$post->cover_image}}" style="width:300px;"></div><br>
                    <br>
                     <div class="col-8">
                        <div class="shadow-sm p-3 mb-5 bg-white rounded">
                            <h3>{{$post->title}}</h3>
                            <p>{!!$post->body!!}</p>
                        </div><small>Written on {{$post->created_at}}</small>
                    </div>
                </div>
            </div>
</br>
@if(!auth::guest())
    @if(auth::user()->id == $post->user_id)
  <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>

  {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
  {{form::hidden('_method', 'DELETE')}}
  {{Form::submit('Delete', ['class'=>'btn btn-secondary'])}}
  {!! Form::close() !!}
  @endif
  @endif
@endsection