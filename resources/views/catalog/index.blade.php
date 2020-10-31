@extends('layout/main')
@section('title','Catalog')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Catalog List</h1>
            
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Shop Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Condition</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $item_list as $item )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->item_name }}</td>
                        <td>Rp {{ $item->price }}</td>
                        <td>{{ $item->shop_name }}</td>
                        <td>{{ $item->category_name }}</td>
                        <td>{{ $item->condition_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

<script>

</script>

@endsection
