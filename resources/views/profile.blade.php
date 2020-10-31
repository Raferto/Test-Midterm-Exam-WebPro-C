@extends('layout/main')
@section('title','Profile')

@section('container')

<div class="container">
    <div class="row">
        <div class="mt-3">
                @guest
                    <h3>You must login to view your profile</h3>
                @endguest
            <div class="col-10">
                
                @auth
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Profile
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> {{ auth()->user()->name }}</li>
                        <li class="list-group-item"> {{ auth()->user()->username }}</li>
                        <li class="list-group-item"> {{ auth()->user()->email }} </li>
                    </ul>
                    @endauth

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<!-- <form>
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
        </div>
    </div>
</form> -->
    