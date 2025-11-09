@extends('layout.masterBlade')
@section('title','DetailPage')
@section('konten')
    <div class="mt-4 mx-4">
        <h2 class=>Judul</h2>
        <div>
            <img class="w-100" height="500px" src="{{asset('img/HomePage-Hero.jpg')}}" alt="">
            <div class="fs-6">
                lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.
            </div>
        </div>
        <div class="mt-4 fs-5">
            Hingga Juni 2024 memiliki lebih dari 10 ribu pengguna.
            EduFun hadir sebagai bentuk revolusi dari pendidikan di Indonesia dengan mengedepankan cara berpikir kritis, logis, rasional, dan sumber pengetahuan sains yang
            terintegrasi terhadap semua mahasiswa IT di Indonesia,
            dan bercita-cita mencetak generasi Indonesia yang memahami ilmu pengetahuan dan cinta belajar
        </div>
    </div>
@endsection
