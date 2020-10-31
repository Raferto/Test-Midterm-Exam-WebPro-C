@extends('layout/main')
@section('title','About')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="mt-3" style="font-size:25px; margin-bottom: 20px">
                This website serves to manage the warehousing system between our stores and 
                our store branches
            </h2>
            <h5 class="column" style="margin-left:10px">Group Name</h5>
            <div class="column" style="float:left; width:30%; padding: 0 10px; margin-right: 30px">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src= "{{ url('/img/rafid.jpg') }}" alt="Rafid Photo">
                    <div class="card-body">
                        <h5 class="card-title">Rafid Ferdianto</h5>
                        <p class="card-text">05111840000032</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Informatics</li>
                        <li class="list-group-item">Sepuluh Nopember Institute of Technology</li>
                        <li class="list-group-item">Surabaya, Indonesia</li>
                    </ul>
                </div>
            </div>
            <div class="column" style="float:left; width:30%; padding: 0 10px; margin-right: 30px">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src= "{{ url('/img/ilham.jpg') }}" alt="Ilham Photo">
                    <div class="card-body">
                        <h5 class="card-title">Muhammad Ilham Bayhaqi</h5>
                        <p class="card-text">05111840000069</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Informatics</li>
                        <li class="list-group-item">Sepuluh Nopember Institute of Technology</li>
                        <li class="list-group-item">Surabaya, Indonesia</li>
                    </ul>
                </div>
            </div>
            <div class="column" style="float:left; width:30%; padding: 0 10px; margin-right: 30px">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src= "{{ url('/img/afif.jpg') }}" alt="Afif Photo">
                    <div class="card-body">
                        <h5 class="card-title">Muhammad Afif F</h5>
                        <p class="card-text">05111840000093</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Informatics</li>
                        <li class="list-group-item">Sepuluh Nopember Institute of Technology</li>
                        <li class="list-group-item">Surabaya, Indonesia</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
