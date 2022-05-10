<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class benchmarksController extends Controller
{
    public function readdata()
    {
        //mau ambil data dari tabel mahasiswa
        $benchmarks= DB::table('benchmarks')->get();

        // mengirim ke halaman mahasiswa untuk ditampilkan data
        return view('datamahasiswa',['benchmarks'=>$benchmarks]);
    }

    public function input()
    {
        return view('inputdata');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('benchmarks')->insert([
            'Device' => $request->Device,
            'cpu_rating' => $request->cpu_rating,
            'gpu_rating' => $request->gpu_rating,
            'memory_rating' => $request->memory_rating,
            'user_experience_rating' => $request->user_experience_rating,
            'total_score_rating' => $request->total_score_rating
        ]);

        return redirect('/tampildata');
    }

    public function edit($cpu_rating)
    {
        #ambil data mahasiswa berdasarkan nim
        $benchmarks = DB::table('benchmarks')->where('cpu_rating', $cpu_rating)->get();

        #passing data
        return view('edit', ['benchmarks' => $benchmarks]);
    }

    public function update(Request $request)
    {
        DB::table('benchmarks')->where('cpu_rating', $request->cpu_rating)->update([
            'Device' => $request->Device,
            'cpu_rating' => $request->cpu_rating,
            'gpu_rating' => $request->gpu_rating,
            'memory_rating' => $request->memory_rating,
            'user_experience_rating' => $request->user_experience_rating,
            'total_score_rating' => $request->total_score_rating
        ]);

        return redirect('/tampildata');
    }

    public function hapus($cpu_rating)
    {
        DB::table('benchmarks')->where('cpu_rating', $cpu_rating)->delete();
        return redirect('/tampildata');
    }

}