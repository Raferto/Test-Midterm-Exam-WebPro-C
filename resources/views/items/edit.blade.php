@extends('layout/main')
@section('title','')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-2">Edit Item Form</h1>
            
            <form method="post" action="/items/{{ $item->id }}">
            <!-- untuk keamanan tambahkan csrf -->
            @method('patch')
            @csrf
                <div class="form-group">
                    <label for="item_name">Name</label>
                    <input type="text" class="form-control"
                    id="item_name" placeholder="Insert Your Item Name" name="item_name" value="{{ $item->item_name }}" required>
                </div>
                
                <div class="form-group">
                    <label for="item_description">Item Description</label>
                    <input type="text" class="form-control"
                    id="item_description" placeholder="Insert Your Item Description" name="item_description" value="{{ $item->item_description }}">
                </div>

                <div class="form-group">
                    <label for="item_price">Price</label>
                    <input type="number" min=0 class="form-control" 
                    id="item_price" placeholder="Insert Your Item Price" name="price"value="{{ $item->price }}" required>
                </div>

                <div class="form-group">
                    <label for="item_stock">Stock</label>
                    <input type="number" min=0 class="form-control" 
                    id="item_stock" placeholder="Insert Your Item Stock" name="item_stock"value="{{ $item->item_stock }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection
