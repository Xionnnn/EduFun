@extends('layout.masterBlade')
@section('title','Writers')
@section('konten')
    <div class="container-fluid py-5 px-4">
        <h1 class="mb-5">Our Writers:</h1>

        <div class="row justify-content-center g-4">
            @for($i = 0; $i < 3; $i++)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-center">
                        <div class="rounded-circle bg-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 200px; height: 200px; overflow: hidden;">
                            <img src="{{asset('img/profile.jpg')}}" alt="Writer profile picture" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <h5 class="mb-2">
                            @if($i == 0)
                                Raka Putra Wicaksono
                            @elseif($i == 1)
                                Bia Mecca Annisa
                            @else
                                Abi Firmansyah
                            @endif
                        </h5>
                        <p class="text-muted">
                            @if($i == 0)
                                Spesialis Interactive Multimedia
                            @elseif($i == 1)
                                Spesialis Data Science
                            @else
                                Spesialis Network Security
                            @endif
                        </p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
