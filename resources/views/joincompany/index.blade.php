<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('css/jquery.countdown.css')}}" />
        <script src="{{url('js/bootstrap.min.js')}}"></script>
        <script src="{{url('js/jquery-3.3.1.js')}}"></script>
        <script src="{{url('js/jquery.countdown.js')}}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{url('css/index.css')}}">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">HUBIN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<div class="col-lg-12 parallax" style="height: 400px;background-size: 100%;background-image: url('{{url('img/frontheader.jpg')}}');padding: 15%;color: #fff;">
  <center><h2>HUBIN SMKN 13 BANDUNG</h2></center>
</div>


<div class="row" id="setgrid">

    <!--==========================CONTENT KIRI==========================-->
    <div class="col-lg-3">
          <h4>SEARCH</h4>
              <form class="navbar-form" role="search" id="frm-s">
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search" name="q">
                      <div class="input-group-btn">
                          <button class="btn btn-default" type="submit" style="border-bottom-left-radius: 0px;border-top-left-radius: 0px;"><i class=     "fa    fa fa-search"></i></button>
                      </div>
                  </div>
              </form>

          <hr>

          <h4>FILTER</h4>
          <form action="" id="frm-f">

            <div class="flt">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input optObjek" id="customCheck1" value="jurusan">
                <label class="custom-control-label" for="customCheck1">Jurusan</label>
              </div>
            </div>
            <div class="flt">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input optObjek" id="customCheck2" value="dalamkota">
                <label class="custom-control-label" for="customCheck2">Dalam Kota</label>
              </div>
            </div>
            <div class="flt">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input optObjek" id="customCheck3" value="luarkota">
                <label class="custom-control-label" for="customCheck3">Luar Kota</label>
              </div>
            </div>
            <div class="flt">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input optObjek" id="customCheck4" value="lainlain">
                <label class="custom-control-label" for="customCheck4">Lain lain</label>
              </div>
            </div>
          </form>



    </div>
    <!--==========================CONTENT KANAN==========================-->
    <div class="col-9" id="list_mitraPengamanan">
        <div class="col-lg-12" id="con1">
            <center><h2>SISA WAKTU PEMILIHAN TEMPAT PKL 2018 </h2>  </center>
            <!-- Display the countdown timer in an element -->
            <p id="demo"></p>
        </div>
        <!--===============CONTENT===============-->
        <div class="col-lg-12 filter dalamkota lainlain" id="content-right" >
          <div class="row">
          <div class="col-lg-3" id="grid-logo">
              <img src="{{url('img/page_bg_center.jpg')}}" id="setlogo">
          </div>
          <div class="col-lg-5" id="field-content">
            <a href="" id="colorlink"><h4 >PT INTI (PERSERO)</h4></a><br>
            Description ====
          </div>
          <div class="col-lg-4" id="content-icon">
            <i class="fa fa fa-user"> 24 Orang</i><br>
            <i class="fa fa fa-trophy"> IT </i><br>
            <i class="fa fa fa-location-arrow"> BANDUNG</i><br>
            <i class="fa fa fa-shield" style="color: #27ae61;"> AKTIF</i><br>

          </div>

          </div>
        </div>
        <!--===============CONTENT===============-->
                <div class="col-lg-12 filter jurusan" id="content-right" >
          <div class="row">
          <div class="col-lg-3" id="grid-logo">
              <img src="{{url('img/page_bg_center.jpg')}}" id="setlogo">
          </div>
          <div class="col-lg-5" id="field-content">
            <a href="" id="colorlink"><h4 >PT BIRUTEKNO INC</h4></a><br>
            DBS Live More Society: Developer Challenge 2 ini diselenggarakan oleh PT Bank DBS Indonesia.
          </div>
          <div class="col-lg-4" id="content-icon">
            <i class="fa fa fa-user"> 24 Orang</i><br>
            <i class="fa fa fa-trophy"> IT </i><br>
            <i class="fa fa fa-location-arrow"> BANDUNG</i><br>
            <i class="fa fa fa-shield" style="color: #ba2d2d;"> TIDAK AKTIF</i><br>

          </div>

          </div>
        </div>



    </div>

</div>


<footer>
  <div class="footcontent" style="background-color: #fff;padding: 20px;">
    <center>HUBIN SMKN 13 BANDUNG - 2018</center>
  </div>
</footer>

<script>
// Set the date we're counting down to
var countDownDate = new Date("{{ date('F d,Y', strtotime($date)) }} {{ date('H:i:s', strtotime($hours)) }}").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + " : " + hours + " : "
  + minutes + " : " + seconds;

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>


<script>
  $('input[type="checkbox"]').on('change', function() {
    $(this).siblings('input[type="checkbox"]').not(this).prop('checked', false);
    searchBy();
  });
  function searchBy(){
    var tahun = '';
    var objek = '';
    var provinsi = '';
    $('.optTahun:checked').each(function(){
      tahun = $(this).val().toLowerCase();
    });
    $('.optObjek:checked').each(function(){
      objek = $(this).val().toLowerCase();
    });
    $('.optProvinsi:checked').each(function(){
      provinsi = $(this).val().toLowerCase();
    });
    $("#list_mitraPengamanan *").filter(function() {
      if(tahun == '' && objek == '' && provinsi == ''){
        $('.filter').show();
      }else {
        $(".filter").not('.'+tahun+objek+provinsi).hide();
        $('.filter').filter('.'+tahun+objek+provinsi).show();
      }
    });
  }
</script>
<script>
  $('.your-checkbox').prop('indeterminate', true)
</script>

</body>
</html>
