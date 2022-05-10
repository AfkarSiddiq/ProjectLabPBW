@extends('template')
@section('title', 'Tambah Data')

@section('konten')
<p>
<h3>1. Jumlah Skor</h3>
Aplikasi benchmark memberi perangkat Anda skor numerik keseluruhan serta skor individual untuk setiap tes yang dilakukan. Skor keseluruhan dibuat dengan menjumlahkan hasil skor individu tersebut. Angka skor ini tidak terlalu berarti, hanya berguna untuk membandingkan perangkat yang berbeda. Misalnya, jika skor perangkat Anda adalah 300000, perangkat dengan skor 600000 sekitar dua kali lebih cepat. Anda dapat menggunakan skor tes individual untuk membandingkan kinerja relatif dari bagian-bagian tertentu dari perangkat yang berbeda. Misalnya, Anda dapat membandingkan seberapa cepat kinerja penyimpanan ponsel Anda dibandingkan dengan penyimpanan ponsel lain.<br>

<h3>2. Skor CPU</h3>
Bagian pertama dari skor keseluruhan adalah skor CPU Anda. Skor CPU pada gilirannya mencakup output dari CPU Mathematical Operations, CPU Common Algorithms, dan CPU Multi-Core. Dengan kata yang lebih sederhana, skor CPU berarti seberapa cepat ponsel Anda memproses perintah. Unit pemrosesan pusat (CPU) perangkat Anda melakukan sebagian besar pemrosesan angka. CPU yang lebih cepat dapat menjalankan aplikasi lebih cepat, sehingga semua yang ada di perangkat Anda akan tampak lebih cepat. Tentu saja, begitu Anda mencapai titik tertentu, kecepatan CPU tidak akan banyak memengaruhi kinerja. Namun, CPU yang lebih cepat mungkin masih membantu saat menjalankan aplikasi yang lebih menuntut, seperti game kelas atas.<br>

<h3>3. Skor GPU</h3>
Bagian kedua dari skor keseluruhan adalah skor GPU Anda. Skor ini terdiri dari output komponen grafis seperti Metal, OpenGL atau Vulkan, tergantung pada perangkat Anda. Skor GPU berarti seberapa baik ponsel Anda menampilkan grafik 2D dan 3D. Unit pemrosesan grafis (GPU) perangkat Anda menangani grafis yang dipercepat. Saat Anda bermain game, GPU Anda bekerja dan merender grafik 3D atau mempercepat grafik 2D yang mengkilap. Banyak animasi antarmuka dan transisi lainnya juga menggunakan GPU. GPU dioptimalkan untuk jenis operasi grafis ini. CPU dapat melakukannya, tetapi lebih untuk tujuan umum dan akan membutuhkan lebih banyak waktu dan daya baterai. Anda dapat mengatakan bahwa GPU Anda melakukan pemecahan angka grafis, jadi skor yang lebih tinggi di sini lebih baik.<br>

<h3>4. Skor Memori</h3>
Bagian ketiga dari skor keseluruhan adalah skor MEM Anda. Skor MEM meliputi hasil keluaran RAM Access, ROM APP IO, ROM Sequential Read and Write, dan ROM Random Access. Dengan kata yang lebih sederhana, skor MEM berarti seberapa cepat dan seberapa banyak memori yang dimiliki ponsel Anda. RAM adalah singkatan dari memori akses acak; sedangkan ROM adalah singkatan dari read-only memory. Perangkat Anda menggunakan RAM sebagai memori kerja, sedangkan penyimpanan flash atau kartu SD internal digunakan untuk penyimpanan jangka panjang. Semakin cepat ia dapat menulis dan membaca data dari RAM-nya, semakin cepat kinerja perangkat Anda. RAM Anda terus-menerus digunakan di perangkat Anda, apa pun yang Anda lakukan. Sementara RAM bersifat fluktuatif, ROM adalah kebalikannya. RAM sebagian besar menyimpan data sementara, sedangkan ROM digunakan untuk menyimpan data permanen seperti firmware ponsel Anda. Baik RAM dan ROM membentuk memori telepon Anda, membantunya melakukan tugas secara efisien.<br>

<h3>5. Skor User Experience</h3>
Bagian keempat dan terakhir dari skor keseluruhan adalah skor UX Anda. Skor UX terdiri dari hasil output dari tes Keamanan Data, Pemrosesan Data, Pemrosesan Gambar, Pengalaman Pengguna, dan Video CTS dan Decode. Skor UX berarti skor keseluruhan yang mewakili bagaimana "pengalaman pengguna" perangkat di dunia nyata. Ini adalah angka yang dapat Anda lihat untuk merasakan kinerja keseluruhan perangkat tanpa menggali tolok ukur di atas atau terlalu mengandalkan skor keseluruhan.<br>
</p>
    <center>
    <form action="/store" method ="post">
        {{csrf_field()}}
        DEVICE <br>   <input type=text, name="Device", required="required"><br><br>
        CPU rating   <br>  <input type=text, name="cpu_rating", required="required"><br><br>
        GPU rating    <br>  <input type=text, name="gpu_rating", required="required"><br><br>
        Memory rating    <br>  <input type=text, name="memory_rating", required="required"><br><br>
        User experience     <br>  <input type=text, name="user_experience_rating", required="required"><br><br>
        TOTAL  <br>  <input type=text, name="total_score_rating", required="required"><br><br>
        <input type="submit" value="Simpan Data">
    </form>
    </center>

@endsection