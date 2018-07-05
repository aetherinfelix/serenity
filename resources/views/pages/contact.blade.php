@extends('layout.app')

@section('content')
<form action="{{ route('contact') }}" method="post">
  {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Name">
      <small id="nameHelp" class="form-text text-muted">Just so I know what to call you.</small>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
      <small id="nameHelp" class="form-text text-muted">We will never reveal your email address to anybody.</small>
    </div>
    <div class="form-group">
     
          <select name="love" class="form-control">
           <option name="fan" value="fan">Fan</option>
            <option name="hate" value="hate">Hate Mail</option>
            </select>
      
      </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="5"></textarea>
    </br>
        <button type="submit" class="btn btn-primary" value="Send Email">Submit</button>
</form>
@endsection
