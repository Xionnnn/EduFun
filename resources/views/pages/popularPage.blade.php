@extends('layout.masterBlade')
@section('title','PopularPage')
@section('konten')
    <div class="container-fluid px-4 py-4">
        <h2 class="mb-4">Popular Page</h2>

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
        @php $current = $articles->currentPage(); @endphp
        <nav aria-label="Popular pagination" class="mt-4">
            <ul class="pagination pagination-sm justify-content-center align-items-center gap-2">
                <li class="page-item disabled">
                    <span class="page-link bg-transparent border-0 text-muted px-0">Page</span>
                </li>
                <li class="page-item {{ $current === 1 ? 'active' : '' }}">
                    <a class="page-link rounded-pill px-3" href="{{ $articles->url(1) }}">1</a>
                </li>
                <li class="page-item {{ $current === 2 ? 'active' : '' }}">
                    <a class="page-link rounded-pill px-3" href="{{ $articles->url(2) }}">2</a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
