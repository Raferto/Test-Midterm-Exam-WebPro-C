@extends('layout/main')
@section('title','Home')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Hi, What item did you need!</h1>

		</div>
    </div>

    <div class="centered-title">
        <h1>Category</h1>
        
        <div class="welcome-menu">
            @foreach( $categories as $category)
			<a href="/catalog/category/{{ $category->id }}">
				<div class="menu-list ml-regular ml-col-3">
					<div class="inner-wrapper">
						<h2>{{ $category->category_name }}</h2>
						<img src="https://ak.picdn.net/shutterstock/videos/29452684/thumb/1.jpg">
					</div>
				</div>
            </a>
            @endforeach
        </div>
    </div>
</div>


@endsection
    