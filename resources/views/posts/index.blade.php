<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@extends('layout.app') @section('content')
    <h1>Posts</h1>
        @if(count($posts) > 0) @foreach($posts as $post)
            <div class="container">
                    <div class="row">
                            <div class="col-4"><img class="img-thumbnail" src="/storage/cover_images/{{$post->cover_image}}" style="width:300px;"></div><br>
                                <br>
                                 <div class="col-8">
                                    <div class="shadow-sm p-3 mb-5 bg-white rounded">
                                        <h3><a href="posts/{{$post->id}}" class="nav-link disabled">{{$post->title}}</a></h3>
                                        <p>{!!$post->body!!}</p>
                                    </div><small>Written on {{$post->created_at}}</small>
                                </div>
                            </div>
                        </div>
                        @endforeach 
                    {{$posts->links()}} 
                @else
            <p>No Posts Found</p>
        @endif 
    @endsection
</body>
</html>