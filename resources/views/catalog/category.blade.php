@extends('layout/main')
@section('title','Home')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Hi, What kind item did you need?</h1>

		</div>
    </div>

    <div class="centered-title">
        <h1>Category</h1>
        
        <div class="welcome-menu">
            @foreach( $categories as $category)
            <?php 
                $c = $loop->count % 3;
                $className = 'ml-col-3';
                if($loop->remaining < $c){
                    $className = 'ml-col-'.$c;
                }
            ?>
			<a href="/catalog/category/{{ $category->id }}">
				<div class="menu-list ml-regular {{ $className }}">
					<div class="inner-wrapper">
						<h2>{{ $category->category_name }}</h2>
						<img src="{{ $category->image_url }}">
					</div>
				</div>
            </a>
            @endforeach
        </div>
    </div>
</div>


@endsection
    