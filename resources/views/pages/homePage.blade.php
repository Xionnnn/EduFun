@extends('layout.masterBlade')
@section('title','HomePage')
@section('konten')
    {{--Hero image--}}
    <div class="mb-3">
        <img class="w-100" height="500px" src="{{asset('img/HomePage-Hero.jpg')}}" alt="">
    </div>
    {{--Home page content--}}
    <div class="mx-4">
        @for($i = 0;$i<3;$i++)
            <div class="row mb-4">
                <div class="col-4">
                    <img class="img-fluid" height="70px" src="{{asset('img/HomePage-Hero.jpg')}}" alt="">
                </div>
                <div class="col-8">
                    <h2>
                        Judul
                    </h2>
                    <div class="fs-6">
                        informasi tanggal
                    </div>
                    <div class="fs-5">
                        lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl eget tincidunt condimentum, nisl nisl tincidunt nisl, eget tincidunt condimentum nisl nisl nisl. lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod.
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-dark">Read more...</button>
                    </div>
                </div>
            </div>
        @endfor
    </div>
@endsection
