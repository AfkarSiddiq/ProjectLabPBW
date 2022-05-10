@extends('template')
@section('title', 'Dasboard')

@section('konten')
    <div class="main">
        <center><div class="android ">
            <h2>smartphone</h2>
            <p>Selalu ada kompetisi di dunia smartphone. Dan ini, tidak hanya berasal dari berbagai brand yang saling bertarung untuk menciptakan smartphone terbaik versi mereka, namun juga dari sistem operasi yang digunakan yaitu Android dan iOS.

            Android sendiri merupakan sistem operasi yang dikembangkan oleh Google, sementara iOS dikembangkan oleh raksasa teknologi yang didirikan oleh Steve Jobs yaitu Apple. Keduanya memang memiliki kelebihan dan kekurangan masing-masing</p>

            <img src="{{asset('image/versus.jpg')}}" alt="android and ios" style="width: 1200px; height: 500px">
            <p>terdapat beberapa keunggulan tentang rating diantara kedua OS ini. untuk lihat datanya silahkan <a href="/tampildata">lihat disini</a> </p>
            <p>Anda juga dapat untuk menambahkan tentang rating dari kedua OS ini <a href="/tambahdata">di sini</a>  </p>
        </div>
        </center>
    </div>
@endsection
 