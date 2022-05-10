@extends('template')
@section('title', 'Edit Data Mahasiswa')

@section('konten')
    @foreach($benchmarks as $bch)
        <form action="/mahasiswa/update" method ="post">
            {{csrf_field()}}
            Device <br>  <input type=text, name="Device", required="required", value="{{$bch->Device}}"><br>
            CPU <br> <input type=text, name="cpu_rating", required="required", value="{{$bch->cpu_rating}}"><br>
            GPU <br><input type=text, name="gpu_rating", required="required", value="{{$bch->gpu_rating}}"><br>
            MEM <br> <input type=text, name="memory_rating", required="required", value="{{$bch->memory_rating}}"><br>
            UX <br> <input type=text, name="user_experience_rating", required="required", value="{{$bch->user_experience_rating}}"><br>
            TOTAL <br> <input type=text, name="total_score_rating", required="required", value="{{$bch->total_score_rating}}"><br>
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach
@endsection