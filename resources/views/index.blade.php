@extends('layout/main')
@section('title','Home')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            @auth
            <h1 class="mt-2">Hello, {{ auth()->user()->name }}!</h1>
            @endauth

            @guest
            <h1 class="mt-2">Hello, welcome to our website!</h1>
            @endguest

		</div>
    </div>

    <div class="centered-title">
		<h1>Discover</h1>

        <div class="welcome-menu">
			<a href="/catalog">
				<div class="menu-list ml-regular ml-col-3">
					<div class="inner-wrapper">
						<h2>View All Item</h2>
						<img src="https://ak.picdn.net/shutterstock/videos/29452684/thumb/1.jpg">
					</div>
				</div>
			</a>

			<a href="/catalog/category">
				<div class="menu-list ml-reverse ml-col-3">
					<div class="inner-wrapper">
						<h2>Category</h2>
						<img src="https://images.squarespace-cdn.com/content/v1/5362a66ee4b05f0813543305/1446671955628-ALDZXXEFR7EV52AA99CJ/ke17ZwdGBToddI8pDm48kLPswmMOqQZ9-Q6KHLjvbpZ7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UTcpTqfU-ZEsztPyQLxhSSK-PhJjRDDFQG0l3_ZnmWi1QjT9byXZM3ISxo3y1NRptg/aer_dp_web_shoes.jpg">
					</div>
				</div>
			</a>

			<a href="/profile">
				<div class="menu-list ml-regular ml-col-3">
					<div class="inner-wrapper">
						<h2>Profile</h2>
						<img src="https://images.unsplash.com/photo-1500239524810-5a6e76344a17?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80">
					</div>
				</div>
			</a>

			<a href="/shop">
				<div class="menu-list ml-reverse ml-col">
					<div class="inner-wrapper">
						<h2>Manage Store</h2>
						<img src="https://images05.military.com/sites/default/files/2020-03/lending%20closet.png">
					</div>
				</div>
			</a>
        </div>
    </div>
</div>


@endsection
    