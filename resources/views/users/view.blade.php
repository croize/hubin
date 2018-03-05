@extends('layouts.utama')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Detail User</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="/admin/users">User</a></li>
            <li class="active">{{$user->name}}</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-4 col-xs-12">
        <div class="white-box">
            <div class="user-bg"> <img width="100%" alt="user" src="{{url('assets/images/3180.png')}}">
                <div class="overlay-box">
                    <div class="user-content">
                        <a href="javascript:void(0)"><img src="{{url('assets/images/users/genu.jpg')}}" class="thumb-lg img-circle" alt="img"></a>
                        <h4 class="text-white">{{$user->name}}</h4>
                        <h5 class="text-white">{{$user->email}}</h5> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-xs-12">
        <div class="white-box">
            <ul class="nav nav-tabs tabs customtab">
                <li class="active tab">
                    <a href="#profile" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Profile</span> </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="profile">
                    <div class="row">
                        <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                            <br>
                            <p class="text-muted">{{$user->name}}</p>
                        </div>
                        <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                            <br>
                            <p class="text-muted">{{$user->contact_user}}</p>
                        </div>
                        <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                            <br>
                            <p class="text-muted">{{$user->email}}</p>
                        </div>
                        <div class="col-md-3 col-xs-6"> <strong>Class</strong>
                            <br>
                            <p class="text-muted">{{$user->class}}</p>
                        </div>
                        <div class="col-md-3 col-xs-6"> <strong>Jurusan</strong>
                            <br>
                            <p class="text-muted">@if($user->jurusan == 1) Analis Kimia @elseif($user->jurusan == 2) Rekayasa Perangkat Lunak @elseif($user->jurusan == 3)Teknik Komunikasi dan Jaringan @endif</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
