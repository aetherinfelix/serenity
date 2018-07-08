@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-secondary">Dashboard</div>

                <!-- Nav tabs -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="blog-tab" data-toggle="tab" href="#blog" role="tab" aria-controls="blog" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false">Gallery</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="articles-tab" data-toggle="tab" href="#articles" role="tab" aria-controls="articles" aria-selected="false">Articles</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="log-tab" data-toggle="tab" href="#logs" role="tab" aria-controls="logs" aria-selected="false">Logs</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="blog" role="tabpanel" aria-labelledby="blog-tab">
        <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                </br>
            </br>
        </br>
                    <h3>Your Blog Posts</h3>
            </br>
        </br>
                    @if(count($posts) > 0)
                    <table class="table">
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                            <td>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                    {{form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class'=>'btn btn-primary'])}}
                                    {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                   @else
                   <h3>You Have no Posts</h3>
                   @endif
                </div>
  </div>
  <div class="tab-pane" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
        <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Add to Gallery</a>
                </br>
            </br>
        </br>
                    <h3>Gallery Items</h3>
            </br>
        </br>
                    @if(count($posts) > 0)
                    <table class="table">
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                            <td>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                    {{form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class'=>'btn btn-primary'])}}
                                    {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                   @else
                   <h3>You Have No Posts</h3>
                   @endif
                </div>
  </div>
  <div class="tab-pane" id="articles" role="tabpanel" aria-labelledby="articles-tab">
        <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Add Articles</a>
                </br>
            </br>
        </br>
                    <h3>Article Items</h3>
            </br>
        </br>
                    @if(count($posts) > 0)
                    <table class="table">
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                            <td>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                    {{form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class'=>'btn btn-primary'])}}
                                    {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                   @else
                   <h3>You Have No Posts</h3>
                   @endif
                </div>
      
  </div>
  <div class="tab-pane" id="log" role="tabpanel" aria-labelledby="log-tab">
        <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Logs</a>
                </br>
            </br>
        </br>
                    <h3>Log Information</h3>
            </br>
        </br>
                    @if(count($posts) > 0)
                    <table class="table">
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                            <td>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                    {{form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class'=>'btn btn-primary'])}}
                                    {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                   @else
                   <h3>You Have No Posts</h3>
                   @endif
                </div>
  </div>
</div>

                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
