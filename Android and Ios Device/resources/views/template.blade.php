<!doctype html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>@yield('title')</title>
</head>


<body>
  <nav class="navbar navbar-expand-lg navbar-green bg-green">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img src="image/phone2.png" alt="handphone" style="width: 50px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="/tambahdata">update data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/tampildata">Riwayat data</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <style>
    .carousel-item {
      height: 25rem;
      background: black;
      position: relative;
    }

    .container {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding-bottom: 40px;
    }

    .overlay-image {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      top: 0;
      background-position: center;
      background-size: cover;
      opacity: 0.97;
    }
  </style>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="color: white;">
        <div class="overlay-image" style="background-image:url(./image/android-vs-ios.jpg);opacity: 0.5;"></div>
        <div class="container">
          <h1><b>Android</b></h1>
          <p>Android adalah sebuah sistem operasi khusus yang dirancang untuk perangkat mobile layar sentuh atau disebut dengan smartphone. Sistem operasi ini merupakan pengembangan dari sistem operasi Linux yang sudah terbukti ketangguhan dan kehandalannya.
          </p>
        </div>
      </div>
      <div class="carousel-item" style="color:white">
        <div class="overlay-image" style="background-image:url(./image/android-vs-ios.jpg); opacity: 0.5;"></div>
        <div class="container">
          <h1><b>iOS</b></h1>
          <p>iOS adalah sistem operasi perangkat lunak yang dikembangkan oleh Apple, secara khusus untuk mendukung pengoperasian produk mobile device atau perangkat genggam. iOS tidak hanya dipakai pada ponsel iPhone, melainkan juga di perangkat genggam apple lainnya, seperti tablet iPad dan pemutar musik iPod.
          </p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<h3>@yield('judul')</h3>
@yield('konten')
<br>
<p>created by: M. Afkar Siddiq
    <br>2008107010030
    </p>
</html>