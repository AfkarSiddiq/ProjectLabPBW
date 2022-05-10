@extends('template')
@section('title', 'Data Device')

@section('konten')
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <br>
    <h2> Android and Ios Benchmarks </h2>
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
                        <a href="/edit/{{ $bch->cpu_rating}}" style='background:green;color:#ffffff;font-size:15px;padding:8px 12px;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;text-decoration:none;'>Edit</a>
                        <!-- <a href="">Edit</a>&nbsp;&nbsp;&nbsp; -->
                        <a href="/hapus/{{ $bch->cpu_rating}}" style='background:red;color:#000;font-size:15px;padding:8px 12px;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;text-decoration:none;'>Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<a target="_blank" href="/tambahdata" style='background:#187498;color:#ffffff;font-size:15px;padding:8px 12px;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;text-decoration:none;'>Tambah Data</a>
<a target="_blank" href="https://www.kaggle.com/datasets/alanjo/android-vs-ios-devices-crossplatform-benchmarks" style='background:#187498;color:#ffffff;font-size:15px;padding:8px 12px;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;text-decoration:none;'> Sumber data</a><br>
@endsection