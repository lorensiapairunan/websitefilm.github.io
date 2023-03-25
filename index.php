<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>TOP MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul']; 
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?i=tt3896198a&apikey=9dee38b&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data["Search"] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-warning">

  <h3>MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="search" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item mt-auto">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>Film</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="k1.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">URNING RED</h5>
        <p class="card-text">URNING RED menjadi film kartun
           rekomendasi terbaru 2022. Film kartun ini dirilis pada bulan Maret 2022 di Indonesia. Sementara itu film TURNING RED juga berhasil mencetak rating cukup tinggi sehingga masuk dalam jajaran film animasi terbaik. Mengangkat genre petualangan dan komedi, TURNING RED berkisah mengenai seorang remaja perempuan yang berubah menjadi sesosok panda raksasa berwarna merah.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="K2.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">THE BAD GUYS</h5>
        <p class="card-text">THE BAD GUYS mengisahkan tentang sekelompok karakter hewan yang tergabung dalam geng bernama The Bad Guys.
          Geng tersebut terkenal sebagai geng penjahat yang tengah menjadi buronan polisi. Sampai suatu ketika kelompok tersebut berhasil ditangkap. Kemudian mereka berjanji untuk menjadi orang baik apabila dibebaskan.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="K3.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">DC LEAGUE OF SUPER-PETS</h5>
        <p class="card-text">DC LEAGUE OF SUPER-PETS mengisahkan tentang persahabatan anjing pahlawan dan Superman.
          Di mana fokus utamanya pada karakter anjing super bernama Krypto. Seperti temannya Krypto juga memiliki kekuatan.
          Namun ia merasa Superman sudah menjauh darinya hingga membuat Krypto merasa kesepian. Sampai kejadian tidak diinginkan terjadi ketika muncul penjahat bernama Lex Luthor.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="K4.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">THE LEGEND OF HANK</h5>
        <p class="card-text"> THE LEGEND OF HANK mengisahkan tentang seekor anjing bernama Hank.
          Di mana Hank berjuang untuk melindungi kota dari penjahat bernama Ika Chu. Hank kemudian bertemu Jimbo yang dikenal sebagai samurai sejati. Darinyalah Hank belajar banyak ilmu untuk menjadi samurai.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="K5.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">THE LAST WISH</h5>
        <p class="card-text">THE LAST WISH mengisahkan tentang seekor kucing yang dikenal dengan nama Puss In Boots.
          Petualangan Puss In Boots menyelamatkan penduduk desa dari raksasa berbuah pada malapetaka. Karena Puss In Boots tertimpa bell dari raksasa yang membuatnya mati. Di sinilah petualangannya dimulai untuk mendapatkan kesembilan nyawanya lagi. </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="K6.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">TOM AND JERRY</h5>
        <p class="card-text">Tom and Jerry mengisahkan tentang kedua karakter tersebut yang selalu saja bertengkar.</p>
      </div>
    </div>
  </div>
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
