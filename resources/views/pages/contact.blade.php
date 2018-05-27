@extends('layout.app')

@section('content')
<form>
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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