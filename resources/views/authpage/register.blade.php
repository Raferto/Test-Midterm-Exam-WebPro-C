@extends('layout/authpage')
@section('title','Login')

@section('container')

<form class="form-signin">
  <!-- <img class="mb-4" src="" alt="" width="72" height="72"> -->
  <h1 class="h3 mb-3 font-weight-normal">Register</h1>

  <label for="inputUsername" class="sr-only">Email address</label>
  <input type="input" id="inputUsername" class="form-control" placeholder="Username" required autofocus>

  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  
  <label for="inputPhone" class="sr-only">Phone</label>
  <input type="input" id="inputPhone" class="form-control" placeholder="Phone" required autofocus>
  
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  
  
  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
  <a href='/login'>Have an account? Login here!</a>
  <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
</div>       

@endsection