@extends('layout/main')
@section('title','My Shop')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Nice, Here is your shop</h1>
            <h3>Welcome to {{ $myshop->shop_name }}</h3>

            <a href="/items" class="btn btn-primary my-3">Manage Item</a>
        </div>
    </div>
</div>
@endsection