@extends('layout.app')

@section('content')
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
      {{form::label('navame', 'Name')}}
      {{form::text('Name', '', ['class' => 'form-control', 'placeholder' => ''])}}
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name"  aria-describedby="nameHelp" placeholder="Name">
      <small id="nameHelp" class="form-text text-muted">Just so I know what to call you.</small>
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" rows="5"></textarea>
    </br>
        <button type="submit" class="btn btn-secondary">Submit</button>
  </form>
@endsection
