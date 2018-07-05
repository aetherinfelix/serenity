@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-12 text-left ml-4">
        <a href="/posts" class="btn btn-primary">Go Back</a>
    </div>
</div>
</br>
</br>
<div class="container">
        <div class="row">
                <div class="col-4">
                    <img class="img-thumbnail" src="/storage/cover_images/{{$post->cover_image}}" style="width:300px;">
                </div>
                
                <div class="col-8">
                    <div class="shadow-sm p-3 mb-5 bg-white rounded">
                        <h3>{{$post->title}}</h3>
                        <p>{!!$post->body!!}</p>
                    </div>
                    <div class="shadow-sm p-3 mb-5 bg-white rounded">
                        <small>Written on {{$post->created_at}}</small>
                    </div>
                </div>
        </div>
</div>
</br>
@if(!auth::guest())
    @if(auth::user()->id == $post->user_id)
    <div class="row">
        <div class="col-1 col-offset-3 ml-3">
         <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
        </div>
    <div class="col">
  {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
  {{form::hidden('_method', 'DELETE')}}
  {{Form::submit('Delete', ['class'=>'btn btn-primary'])}}
  {!! Form::close() !!}
    </div>
</div>
  @endif
  @endif

<div class="container">
    <div class="row">
        <div class="col-4">
            <!---For Spacing-->
        </div>
        <div class="col-8">
            <form>
            <p class="lead">Add Comment</p><br>
            <input type="text" placeholder="Add Comment Here" class="form-control"></input><br>
            <button type="submit" class="btn btn-primary" value="Send Email">Submit</button>
            </form>
        </div>
    </div>
</div>

            
@endsection