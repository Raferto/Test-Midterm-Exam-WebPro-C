@extends('layout/main')
@section('title','My Shop')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Nice, Here is your shop</h1>
            {{ $myshop->shop_name }}
        </div>
    </div>
</div>
@endsection
    