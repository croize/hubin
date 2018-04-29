<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pengajuan Praktik Kerja Lapangan</title>
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('css/jquery.countdown.css')}}" />
        <link rel="stylesheet" href="{{url('assets/flipclock.css')}}" />
        <script src="{{url('js/jquery-3.3.1.js')}}"></script>
        <script src="{{url('js/bootstrap.min.js')}}"></script>
        <script src="{{url('js/jquery.countdown.js')}}"></script>
        <script src="{{url('assets/flipclock.js')}}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ url('css/index.css')}}">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head>
<body>
<style>
*{font-family: 'Source Sans Pro', sans-serif;}
.navbar-login
{
    width: 305px;
    padding: 10px;
    padding-bottom: 0px;
}

.navbar-login-session
{
    padding: 10px;
    padding-bottom: 0px;
    padding-top: 0px;
}

.icon-size
{
    font-size: 87px;
}
#grid-mobile{
  height: 100%;
  width: 100%;
  position: relative;
}


</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="margin: 0px;position: fixed;border-radius: 0px;padding: 0px;border-bottom: 1px solid #e7e7e7;">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse container" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active" style="    padding: 7px 0px;">
        <a  href="#" style="color: black;text-decoration: none;"><img src="{{url('img/smkn13.png')}}" alt="" style="height: 35px;">        Hubin SMKN 13 Bandung</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
                          <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: black;">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong>{{Auth::user()->name}}</strong>

                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong>{{Auth::user()->name}}</strong></p>
                                        <p class="text-left small">{{Auth::user()->email}}</p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-primary btn-block btn-sm">Edit Profile</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="{{ route('logout') }}" class="btn btn-danger btn-block" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  {{ csrf_field() }}
                                              </form>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
                        </ul>
  </div>
</nav>


<div class="col-lg-12 parallax img-fluid" style="height: 400px;background-size: 100%;background-image: url('{{url('img/frontheader.jpg')}}');background-repeat: no-repeat;padding: 15%;color: #fff;" id="waa">
  <center><h2 style="font-size: 36px;font-weight: 600;">Hubungan Industri - SMKN 13 BANDUNG</h2></center>
</div>


<div class="row" id="setgrid">

    <!--==========================CONTENT KIRI==========================-->
    <div class="col-lg-3  col-sm-0 col-md-0">
          <h4>SEARCH</h4>
          <form action="/user/join" method="get">
            <div class="input-group"><input type="text" class="form-control js-entity-filter" name="q" value=""> <span class="input-group-btn"> <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button> </span> </div>
          </form>
          <hr>
    </div>
    <!--==========================CONTENT KANAN==========================-->
    <div class="col-lg-9  col-sm-12 col-md-12" id="list_mitraPengamanan">
        <div class="" id="con1">
            <center><h2><b>SISA WAKTU PEMILIHAN TEMPAT PKL 2018 </b></h2>  </center>


            <!-- Display the countdown timer in an element -->
            <p id="demo"></p>
        </div>
        @if(Session::get('message'))
          <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {{ Session::get('message') }} </div>
          @endif
        <!--===============CONTENT===============-->
        @if($cit != NULL)
          @foreach($lala as $waa)
            @if($waa->id == $ge)
            <div class="boxone" style="padding: 30px;padding-left: 0px;">
              <h3><b>PERUSAHAAN YANG ANDA PILIH :</b></h3>
            </div>

              <div class="col-lg-12  col-sm-12 col-xs-12" id="content-right" style="position: relative;" >
                <div class="row">
                  <div class="col-lg-3 col-sm-12" id="grid-logo">
                      <img src="{{url('img/page_bg_center.jpg')}}" id="setlogo" class="img-fluid">
                  </div>
                  <div class="col-lg-5 col-sm-12" id="field-content">
                    <a href="" id="colorlink"><cptncmpny>{{$waa->name_company}}</cptncmpny></a><br>
                    {{$waa->descrtiption}}
                  </div>
                  <div class="col-lg-4 col-xs-12 col-s-12" id="content-icon">



                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="    fa fa-question-circle"></i> Detail</button>
                    <a href="{{url('/user/join/delete',$cit)}}" class="btn btn-danger"><i class=" fa fa-remove"></i> Cancel join</a>
<div class="modal fade product_view" id="product_view" style="float: left;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><center>Detail perusahaan  {{$waa->name_company}}</center></h3>
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
            </div>
            <div class="modal-body">
<table>
  <tr>
    <td style="width: 150px;">Nama Perusahaan </td>
    <td style="width: 200px;">: {{$waa->name_company}} </td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>: {{$waa->address}}</td>
  </tr>
  <tr>
    <td>Deskripsi</td>
    <td>: {{$waa->description}}</td>
  </tr>
</table>
<br>
                    <h4>DATA SISWA PENDAFTAR :</h4>
                    <ul type="square">
                      @foreach($pen as $rw)
                        @if($rw->company_id == $ge)
                        <li>{{$rw->User['name']}}</li>
                        @endif
                      @endforeach
                    </ul>
            </div>
        </div>
    </div>
</div>
                  </div>
                </div>
              </div>
            @endif
          @endforeach

        @else
          @foreach($lala as $su)

              <div class="col-lg-12 col-xs-12" id="content-right" >

                  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12" id="grid-logo">
                      <img src="{{url('img/list_logo_2.png')}}" id="setlogo" class="img-fluid" alt="Responsive image">
                  </div>
                  <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12" id="field-content" style="font-weight: bold;">
                    <a href="" id="colorlink"><cptncmpny>{{$su->name_company}}</cptncmpny></a><br>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" id="content-icon" style="line-height: 35px;">

                    <table>
                      <tr>
                        <td id="ats"><i class="fa fa fa-user"></i></td>
                        <td id="bwh" >{{$su->student}} Orang</td>
                      </tr>
                      <tr>
                        <td id="ats"><i class="fa fa fa-trophy"></i></td>
                        <td id="bwh">IT</td>
                      </tr>
                      <tr>
                        <td id="ats"><i class="fa fa fa-location-arrow"></i></td>
                        <td id="bwhatas">{{$su->address}}</td>
                      </tr>
                      <tr>
                        <td id="ats"><i class="fa fa fa-shield" style="color: #27ae61;"></i></td>
                        <td id="bwh">@if($su->student > 0) AKTIF @elseif($su->student == 0) FULL @endif</td>
                      </tr>


                    </table>

                    <form class="" action="/user/join" method="post" id="join">
                    {{csrf_field()}}
                  <input type="hidden" name="company_id" value="{{$su->id}}">

                  <button type="submit" name="button" class="btn btn-primary"><i class="  fa fa-check"></i> JOIN</button>
                  </form>
                  </div>

              </div>

          @endforeach
        @endif
        <!--===============CONTENT===============-->
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
  document.getElementById("demo").innerHTML = days + " Hari : " + hours + " : "
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
