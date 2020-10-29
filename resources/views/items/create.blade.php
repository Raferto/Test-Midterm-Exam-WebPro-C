@extends('layout/main')
@section('title','Form Tambah Data Barang')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-2">Form Tambah Data Barang</h1>
            
            <form method="post" action="/items">
            <!-- untuk keamanan tambahkan csrf -->
            @csrf
                <div class="form-group">
                    <label for="item_name">Nama</label>
                    <input type="text" class="form-control @error('item_name') is-invalid @enderror"
                    id="item_name" placeholder="Masukkan Nama Barang" name="item_name" value="{{ old('item_name') }}">
                    @error('item_name')
                    <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="item_category">Jenis</label>
                    <!-- old value untuk tetap ada nilanya jika ada yang error -->
                    <input type="text" class="form-control @error('item_category') is-invalid @enderror" 
                    id="item_category" placeholder="Masukkan Jenis Barang" name="item_category"value="{{ old('item_category') }}">
                    @error('item_category')
                    <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection
