@extends('layout/authpage')
@section('title','Login')

@section('container')

<form class="form-signin" method='post' action='/postRegister'>
@csrf
  <!-- <img class="mb-4" src="" alt="" width="72" height="72"> -->
  <h1 class="h3 mb-3 font-weight-normal">Register</h1>

  <label for="inputName" class="sr-only">Name</label>
  <input type="input" id="inputName" class="form-control" placeholder="Your Name"  name='name' required autofocus>

  <label for="inputUsername" class="sr-only">Username</label>
  <input type="input" id="inputUsername" class="form-control" placeholder="Username" name='username' required autofocus>

  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name='email' required autofocus>
  
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name='password' required>
  
  <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
  <a href='/login'>Have an account? Login here!</a>
  <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
</div>       

@endsection