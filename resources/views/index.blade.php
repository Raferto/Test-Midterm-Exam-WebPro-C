@extends('layout/main')
@section('title','Home')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            @auth
            <h1 class="mt-2">Hello, {{ auth()->user()->name }}!</h1>
            @endauth

            @guest
            <h1 class="mt-2">Hello, world!</h1>
            @endguest
        </div>
    </div>
</div>
@endsection
    