@extends('layout/authpage')
@section('title','Login')

@section('container')

<form class="form-signin" action='/postLogin' method='post'>
@csrf
  <!-- <img class="mb-4" src="" alt="" width="72" height="72"> -->
  <h1 class="h3 mb-3 font-weight-normal">Login</h1>
  <label for="username" class="sr-only">Username</label>
  <input type="input" id="Username" name='username' class="form-control" placeholder="Username" value="{{ old('username') }}" required autofocus>
  
  <label for="password" class="sr-only">Password</label>
  <input type="password" id="password" name='password'class="form-control" placeholder="Password" required>
  
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
  <a href='/register'>Don't have an account? Create one here!</a>
  <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
</form>       

@endsection