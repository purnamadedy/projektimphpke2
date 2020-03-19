<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projek PHP ke 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
    .home {
        width: 100%;
        height: 100vh;
        background-image: url(img/Programming-Languages.jpg);
        background-position: center top;
        background-size: cover;
        background-attachment: fixed;
    }
    #bar{
        margin-left: 390px;
    }
    footer {
        width: 100%;
        height: 120px;
        background-color: black;
        padding-top: 30px;
    }
    footer p {
        color: white;
        font-size: 20px;
    }
    footer  i {
        color: white;
    }
    

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">PROGRAM.ID</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Lokasi</a>
            </li>
          </ul>
            <nav class="navbar navbar-dark bg-dark" id="bar">
                <form class="form-inline">
                    <button class="btn btn-outline-success" type="button">Login Member</button>
                    <button class="btn btn-outline-success" type="button">Daftar Member</button>
                </form>
        </div>
      </div>
    </nav>

    <section class="home">
    </section>
    <br><br><br>
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>PILIH PROGRAM BELAJAR</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/css.jpeg">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/git.png">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/html.jpeg">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/php.png">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/unnamed.png">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/java.jpg">
            </a>
          </div>
        </div>

      </div>
    </section>

      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-9">
              <h1>SEGERA DAFTAR PROGRAM.ID KALI INI TERBATAS HANYA UNTUK 10 ORANG TERPILIH</h1>
            </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <button href="form.php"type="button" class="btn btn-lg btn-warning w-100 h-75 mt-3" style="border-radius: 40px;"><a class="nav-link" href="form.php"><h3>DAFTAR</h3></a></button>
              </div>
          </div>
        </div>
      </div>


    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; copyright 2020 </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <i class="fa fa-facebook-square" style="font-size:24px"></i>
            <i class="fa fa-twitter-square" style="font-size:24px"></i>
            <i class="fa fa-instagram" style="font-size:24px"></i>
            <i class="fa fa-pinterest-square" style="font-size:24px"></i>
            <i class="fa fa-youtube-play" style="font-size:24px"></i>
          </div>
        </div>
      </div>
    </footer>





 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <script>
      function send(){
    alert("Selamat Anda Berasil Mendaftar");
    window.location.href="form.php";
  }
 </script>
</body>
</html>