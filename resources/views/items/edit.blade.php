@extends('layout/main')
@section('title','Form Ubah Data Barang')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-2">Form Ubah Data Barang</h1>
            
            <form method="post" action="/items/{{ $item->id }}">
            @method('patch')
            <!-- untuk keamanan tambahkan csrf -->
            @csrf
                <div class="form-group">
                    <label for="nama_barang">Nama</label>
                    <input type="text" class="form-control @error('nama_barang') is-invalid @enderror"
                    id="nama_barang" placeholder="Masukkan Nama Barang" name="nama_barang" value="{{ $item->nama_barang }}">
                    @error('nama_barang')
                    <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jenis_barang">Jenis</label>
                    <!-- old value untuk tetap ada nilanya jika ada yang error -->
                    <input type="text" class="form-control @error('jenis_barang') is-invalid @enderror" 
                    id="jenis_barang" placeholder="Masukkan Jenis Barang" name="jenis_barang"value="{{ $item->jenis_barang }}">
                    @error('jenis_barang')
                    <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>

        </div>
    </div>
</div>
@endsection
