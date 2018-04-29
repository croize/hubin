<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Hubin SMKN 13 BANDUNG</title>
</head>
<style>


  @media (min-width: 100px) {
    body {
        background-image: url('img/bg_mobile.png');background-size: 100%;background-repeat: no-repeat;position: fixed;
    }
}

@media (min-width: 500px) {
    body {
        
  background-image: url('img/bg_middle.png');background-size: 110%;background-repeat: no-repeat;background-position: fixed;
    }
}

@media (min-width: 650px) {
    body {
        
  background-image: url('img/bg_tablet.png');background-size: 115%;background-repeat: no-repeat;background-position: fixed;

    }
}

@media (min-width: 1200px) {
    body {
        
  background-image: url('img/bg_mobile.jpg');background-size: 110%;background-repeat: no-repeat;background-position: fixed;
    }
}
</style>
<body style="height: 100%;width: 100%;">
<nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed" style="background-color: transparent;">
<div class="container">
  <a class="navbar-brand" href="#"><img src="{{url('img/smkn13.png')}}" alt="" style="height: 35px;"> Hubin SMKN 13 Bandung</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"></ul>
    <div class=" my-2 my-lg-0">
      <ul class="navbar-nav">
        <!-- Authentication Links -->
         @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>
         @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
          </div>
        </li>
         @endguest
      </ul>
    </div>
  </div>
</div>
</nav>

<div class="bot" style="display: table;    width: 100%;
    height: 100%;
    min-height: 100%;">
<div class="container" id="cntn" style="    vertical-align: middle;vertical-align: middle;text-align:center;
    padding: 14%;">
          <div class="inner cover">
            <h1 class="cover-heading">Halaman Siswa Prakerin</h1>
            <p class="lead">Untuk melakukan pendaftaran Praktek kerja Industri ( PRAKERIN ) , silahkan daftar dan menghubungi bagian hubin atau klik di bawah ini</p>
            <p class="lead"><br>
              <a href="{{url('/user/join')}}" class="btn btn-outline-dark" style="border-radius: 0px;">Daftar Prakerin</a>
            </p>
          </div>


</div>
</div>










<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>