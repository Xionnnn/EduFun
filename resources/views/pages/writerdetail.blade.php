
@extends('layout.masterBlade')
@section('title','Writer Detail')
@section('konten')
    <div class="container-fluid px-4 py-4">
        {{-- Writer Info --}}
        <div class="d-flex align-items-center mb-4">
            <div class="rounded-circle bg-white d-inline-flex align-items-center justify-content-center me-3" style="width: 80px; height: 80px; overflow: hidden;">
                <img src="{{asset('img/profile.jpg')}}" alt="profile" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div>
                <h4 class="mb-1">{{$writer->name}}</h4>
                <p class="text-muted mb-0">{{$writer->position}}</p>
            </div>
        </div>

        {{-- Articles List --}}
        @foreach($articles as $article)
            <div class="row mb-4">
                <div class="col-12 col-md-5 col-lg-4">
                    <img class="img-fluid rounded-4" src="{{asset('img/HomePage-Hero.jpg')}}" alt="Content Image" style="width: 100%; height: 200px; object-fit: cover;">
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <h4 class="mb-2">
                       {{$article->title}}
                    </h4>
                    <div class="text-muted mb-2" style="font-size: 0.9rem;">
                        {{$article->created_at->format('d M Y')}} | by {{$article->writer->name}}
                    </div>
                    <p class="mb-3">
                        {{$article->description}}
                    </p>
                    <div class="d-flex justify-content-end">
                        <a type="button" class="btn btn-dark" href="{{ route('detail', ['slug' => $article->slug]) }}">Read more...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
