@extends('layout/main')
@section('title','Barang')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-5">
            <h1 class="mt-2">Detail Barang</h1>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->item_name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $item->item_category }}</h6>
                    <!-- <p class="card-text">{{ $item->lain_lain }}</p> -->

                    <a href="{{ $item->id }}/edit" class="btn btn-primary">Edit</a>

                    <form action="/items/{{ $item->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/items" class="card-link">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
