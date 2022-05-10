@extends('template')
@section('title', 'Data Mahasiswa')

@section('konten')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <h2> Data Mahasiswa </h2>
	<div class="row">
        <div class="table-responsive">                
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th>Device</th>
                    <th>cpu_rating</th>
                    <th>gpu_rating</th>
                    <th>memory_rating</th>
                    <th>user_experience_rating</th>
                    <th>total_score_rating</th>
                </thead>
            <tbody> 
                @foreach($benchmarks as $bch)
                <tr>
                    <td>{{$bch->Device}}</td>
                    <td>{{$bch->cpu_rating}}</td>
                    <td>{{$bch->gpu_rating}}</td>
                    <td>{{$bch->memory_rating}}</td>
                    <td>{{$bch->user_experience_rating}}</td>
                    <td>{{$bch->total_score_rating}}</td>
                    <td>
                        <a href="/mahasiswa/edit/{{ $bch->cpu_rating}}">Edit</a>
                        <!-- <a href="">Edit</a>&nbsp;&nbsp;&nbsp; -->
                        <a style="color:red;" href="/mahasiswa/hapus/{{ $bch->cpu_rating}}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection