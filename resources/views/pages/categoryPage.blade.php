@extends('layout.masterBlade')
@section('title','Category - Data Science')
@section('konten')
    <div class="container-fluid px-4 py-4">
        {{-- Category Title --}}
        <h2 class="mb-4">{{$categoryName}}</h2>

        {{-- Articles List --}}
        @foreach($articles as $article)
            <div class="row mb-4 align-items-center">
                <div class="col-12 col-md-5 col-lg-4">
                    <img class="img-fluid rounded-4"
                         src="{{asset('img/article' . $article->id . '.jpg')}}"
                         alt="thumbnail"
                         style="width: 100%; height: 200px; object-fit: cover;">
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <h4 class="mb-2">{{$article->title}}</h4>
                    <div class="text-muted mb-2" style="font-size: 0.9rem;">
                        {{$article->created_at->format('d M Y')}} | by: {{$article->writer->name}}
                    </div>
                    <p class="mb-3">
                        {{$article->description}}
                    </p>
                    <div class="d-flex justify-content-end">
                        <a href="{{route('detail', $article->slug)}}" class="btn btn-dark rounded-pill px-4">read more...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
