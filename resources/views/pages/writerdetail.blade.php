
@extends('layout.masterBlade')
@section('title','Writer Detail')
@section('konten')
    <div class="container-fluid px-4 py-4">
        {{-- Writer Info --}}
        <div class="d-flex align-items-center mb-4">
            <div class="rounded-circle bg-white d-inline-flex align-items-center justify-content-center me-3" style="width: 80px; height: 80px; overflow: hidden;">
                <img src="{{asset('img/profile.jpg')}}" alt="Bia Mecca Annisa profile picture" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div>
                <h4 class="mb-1">Bia Mecca Annisa</h4>
                <p class="text-muted mb-0">Spesialis Data Science</p>
            </div>
        </div>

        {{-- Articles List --}}
        @for($i = 0; $i < 3; $i++)
            <div class="row mb-4">
                <div class="col-12 col-md-5 col-lg-4">
                    <img class="img-fluid rounded-4" src="{{asset('img/HomePage-Hero.jpg')}}" alt="
                @if($i == 0)
                    Machine Learning article thumbnail
                @elseif($i == 1)
                    Deep Learning article thumbnail
                @else
                    Natural Language Processing article thumbnail
                @endif
                " style="width: 100%; height: 200px; object-fit: cover;">
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <h4 class="mb-2">
                        @if($i == 0)
                            Machine Learning
                        @elseif($i == 1)
                            Deep Learning
                        @else
                            Natural Language Processing
                        @endif
                    </h4>
                    <div class="text-muted mb-2" style="font-size: 0.9rem;">
                        @if($i == 0)
                            6 May 2024 | by: Bia
                        @elseif($i == 1)
                            7 May 2024 | by: Bia
                        @else
                            8 May 2024 | by: Bia
                        @endif
                    </div>
                    <p class="mb-3">
                        @if($i == 0)
                            Di tengah pesatnya perkembangan teknologi kecerdasan buatan atau artificial intelligence (AI)...
                        @elseif($i == 1)
                            Deep learning merupakan subbidang machine learning yang algoritmanya terinspirasi dari struktur otak...
                        @else
                            Natural Language Processing (NLP) merupakan salah satu cabang ilmu AI yang berfokus pada pengolahan...
                        @endif
                    </p>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-dark rounded-pill px-4">read more...</button>
                    </div>
                </div>
            </div>
        @endfor
    </div>
@endsection
