@extends('layout/main')
@section('title','Catalog')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Daftar Barang</h1>
            
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jenis Barang</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $item_list as $item )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->item_name }}</td>
                        <td>{{ $item->item_category }}</td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
