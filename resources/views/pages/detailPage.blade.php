@extends('layout.masterBlade')
@section('title','DetailPage')
@section('konten')
    <div class="mt-4 mx-4">
        <h2>{{$article->title}}</h2>
        <div>
            <img class="w-100" height="500px" src="{{asset('img/article' . $article->id . '.jpg')}}" alt="">
            <div class="fs-6">
                {{$article->created_at->format('d M Y')}} | by {{$article->writer->name}}
            </div>
        </div>
        <div class="mt-4 fs-5">
            {{$article->content}}
        </div>
    </div>
@endsection
