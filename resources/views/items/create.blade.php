@extends('layout/main')
@section('title','Add Item Form')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-2">Add Item Form</h1>
            
            <form method="post" action="/items">
            <!-- untuk keamanan tambahkan csrf -->
            @csrf
                <div class="form-group">
                    <label for="item_name">Name</label>
                    <input type="text" class="form-control"
                    id="item_name" placeholder="Insert Your Item Name" name="item_name" value="{{ old('item_name') }}" required>
                </div>

                <div class="form-group">
                    <label for="state">Catagory</label>
                    <select class="custom-select d-block w-100" id="category_id" name="category_id" required>
                        <option value="">Select Catagory...</option>
                        @foreach( $categories as $category )
                            <option value="{{ $category->id}}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="state">Condition</label>
                    <select class="custom-select d-block w-100" id="condition_id" name="condition_id" required>
                        <option value="">Select Condition...</option>
                        @foreach( $conditions as $condition )
                            <option value="{{ $condition->id }}">{{ $condition->condition_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="item_description">Item Description</label>
                    <input type="text" class="form-control"
                    id="item_description" placeholder="Insert Item Description" name="item_description" value="{{ old('item_name') }}">
                </div>

                <div class="form-group">
                    <label for="item_category">Price</label>
                    <input type="number" min=0 class="form-control" 
                    id="item_price" placeholder="Insert Your Item Price" name="price"value="{{ old('item_category') }}">
                </div>

                <div class="form-group">
                    <label for="item_category">Stock</label>
                    <input type="number" min=0 class="form-control" 
                    id="item_stock" placeholder="Insert Your Item Stock" name="item_stock"value="{{ old('item_category') }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection
