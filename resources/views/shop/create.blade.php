@extends('layout/main')
@section('title','Create Your Shop')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            
            <div class="container">
                <div class="py-5 text-center">
                    <!-- <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
                    <h2>It seems, you dont have a shop already</h2>
                    <p class="lead">Just Create One Here!</p>
                </div>
                
                <form method="post" action="/shopCreate">
                @csrf
                    <h4 class="mb-3">Shop Info</h4>
                    <div class="container ml-2">
                        <div class="form-group">
                            <label for="shop_name">Shop Name</label>
                            <input type="text" class="form-control" id="shop_name" placeholder="Shop Name" name="shop_name" value="{{ old('shop_name') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="shop_address">Shop Address</label>
                            <input type="text" class="form-control" id="shop_address" placeholder="Shop Name" name="address" value="{{ old('shop_address') }}">
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="state">State</label>
                                <select class="custom-select d-block w-100" id="state" name="state_id" required>
                                <option value="">Select State...</option>
                                @foreach ($states as $state)
                                <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="city">City</label>
                                <select class="custom-select d-block w-100" id="city" name="city_id" required>
                                </select>
                            </div>
                        </div>
                    </div>

                    <h4 class="mb-3">Shop Plan</h4>
                    <div class="container ml-2">
                        <div class="card-deck mb-3 text-center btn-group btn-group-toggle">
                            @foreach( $badges as $badge)
                            <div class="card mb-4 box-shadow">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">{{ $badge->badge_name }}</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">Rp {{ $badge->price }} <small class="text-muted">/ mo</small></h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                    <li>{{ $badge->description }}</li>
                                    </ul>
                                        <label class="btn btn-secondary active">
                                            <input type="radio" name="badge_id" id="{{ $badge->badge_name }}" value="{{ $badge->id }}" autocomplete="off" checked> Choose
                                        </label>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                <script>
                    $(document).ready(function (){
                        $('#state').on('change', function() {
                            let id = $(this).val();
                            $('#city').empty();
                            $('#city').append('<option value="">Select City...</option>');

                            $.ajax({
                                type: 'GET',
                                url: 'GetCitybyState/' + id,
                                success: function(response){
                                    var response = JSON.parse(response);
                                    console.log(response);
                                    $('#city').empty();
                                    $('#city').append('<option value="">Select City...</option>');
                                    response.forEach( element => {
                                        $('#city').append(`<option value="${element['id']}">${element['city_name']}</option>`);
                                    });
                                }
                            });
                        });
                    });
                    </script>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>


        </div>
    </div>
</div>
@endsection
    