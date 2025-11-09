@extends('layout.masterBlade')
@section('title','Writers')
@section('konten')
    <div class="container-fluid py-5 px-4">
        <h1 class="mb-5">Our Writers:</h1>

        <div class="row justify-content-center g-4">
            @foreach($writers as $writer)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-center">
                        <div class="rounded-circle bg-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 200px; height: 200px; overflow: hidden;">
                            <img src="{{asset('img/profile' . $writer->id . '.jpg')}}" alt="Writer profile picture" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <a class="text-dark" href="{{route('writer.get',['writerId' => $writer->id])}}">
                            <h5 class="mb-2">
                                {{$writer->name}}
                            </h5>
                        </a>
                        <p class="text-muted">
                            {{$writer->position}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
