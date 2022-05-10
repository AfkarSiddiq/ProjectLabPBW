@extends('template')
@section('title', 'Input Data Mahasiswa')

@section('konten')
    <form action="/mahasiswa/store" method ="post">
        {{csrf_field()}}
        DEVICE <br>  <input type=text, name="Device", required="required"><br>
        CPU <br> <input type=text, name="cpu_rating", required="required"><br>
        GPU <br><input type=text, name="gpu_rating", required="required"><br>
        MEM <br> <input type=text, name="memory_rating", required="required"><br>
        UX <br> <input type=text, name="user_experience_rating", required="required"><br>
        TOTAL <br> <input type=text, name="total_score_rating", required="required"><br>
        <input type="submit" value="Simpan Data">
    </form>

@endsection