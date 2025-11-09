@extends('layout.masterBlade')
@section('title','HomePage')
@section('konten')
    {{--Hero image--}}
    <div class="mb-3">
        <img class="w-100" height="550px" src="{{asset('img/HomePage-Hero.jpg')}}" alt="">
    </div>
    {{--Home page content--}}
    <div class="mx-4">
        @foreach($articles as $article)
            <div class="row mb-4">
                <div class="col-4">
                    <img class="img-fluid" height="70px" src="{{asset('img/article' . $article->id . '.jpg')}}" alt="">
                </div>
                <div class="col-8">
                    <h2>
                        {{$article->title}}
                    </h2>
                    <div class="fs-6">
                        {{$article->created_at->format('d M Y')}} | by {{$article->writer->name}}
                    </div>
                    <div class="fs-5">
                        {{$article->description}}
                    </div>
                    <div class="d-flex justify-content-end">
                        <a type="button" class="btn btn-dark" href="{{ route('detail', ['slug' => $article->slug]) }}">Read more...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
