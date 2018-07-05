@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

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
            </div>
        </div>
    </div>
</div>
@endsection
