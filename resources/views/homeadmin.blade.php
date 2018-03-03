@extends('layouts.utama')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Dashboard</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li class="active">Dashboard</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Jumlah Perusahaan</h3>
            <ul class="list-inline two-part">
              <li>
                  <div id="sparklinedash"></div>
              </li>
                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">{{$company}}</span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Siswa sudah daftar</h3>
            <ul class="list-inline two-part">
                <li>
                    <div id="sparklinedash2"></div>
                </li>
                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">{{$user}}</span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Siswa pending PKL</h3>
            <ul class="list-inline two-part">
                <li>
                    <div id="sparklinedash3"></div>
                </li>
                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">{{$requestpkl}}</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-md-12 col-lg-6 col-sm-12">
      <div class="white-box">
          <h3 class="box-title">User Register Today</h3>
          <div class="row sales-report">
              <div class="col-md-6 col-sm-6 col-xs-6">
                  <h2>{{ date('F Y',strtotime($now))}}</h2>
                  <p>Registered Today</p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 ">
                  <h1 class="text-right text-info m-t-20">Total : {{$countnewuser}}</h1>
              </div>
          </div>
          <div class="table-responsive">
              <table class="table">
                  <thead>
                      <tr>
                          <th>NO</th>
                          <th>NAME</th>
                          <th>STATUS</th>
                          <th>DATE</th>
                      </tr>
                  </thead>
                  <tbody>
                        @foreach($newuser as $user)
                          <tr>
                              <td>{{$loop->iteration}}</td>
                              <td class="txt-oflo">{{$user->name}}</td>
                              @if($user->level == 1)
                              <td><span class="label label-success label-rouded">SISWA</span> </td>
                              @elseif($user->level == 2)
                              <td><span class="label label-danger label-rouded">ADMIN</span> </td>
                              @endif
                              <td class="txt-oflo">{{ date('d F Y',strtotime($user->created_at))}}</td>
                          </tr>
                          @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  <div class="col-md-12 col-lg-6 col-sm-12">
      <div class="panel">
          <div class="panel-heading">MANAGE USERS REQUESL PKL</div>
          <div class="table-responsive">
              <table class="table table-hover manage-u-table">
                  <thead>
                      <tr>
                          <th style="width: 70px;" class="text-center">#</th>
                          <th>NAME</th>
                          <th>CLASS</th>
                          <th>MANAGE</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($req as $siswapkl)
                      <tr>
                          <td class="text-center">>{{$loop->iteration}}</td>
                          <td><span class="font-medium">{{$siswapkl->Users['name']}}</span></td>
                          <td>{{$siswapkl->Users['class']}}</td>
                          <td>
                            <a href="/admin/userrequest"
                                onclick="event.preventDefault();
                                         document.getElementById('accepted').submit();" class="btn btn-info btn-outline btn-circle btn-lg m-r-5">
                                <i class="fa fa-check"></i>
                            </a>
                            <form id="accepted" action="/admin/userrequest/{{$siswapkl->id}}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">
                                <input type="hidden" name="id" value="{{$siswapkl->id}}">
                                <input type="hidden" name="akses" value="1">
                                <input type="hidden" name="user_id" value="{{$siswapkl->user_id}}">
                            </form>
                            <a href="/admin/userrequest"
                                onclick="event.preventDefault();
                                         document.getElementById('denied').submit();" class="btn btn-info btn-outline btn-circle btn-lg m-r-5">
                                <i class="fa fa-times"></i>
                            </a>
                            <form id="denied" action="/admin/userrequest/{{$siswapkl->id}}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">
                                <input type="hidden" name="id" value="{{$siswapkl->id}}">
                                <input type="hidden" name="akses" value="0">
                                <input type="hidden" name="user_id" value="{{$siswapkl->user_id}}">
                            </form>
                          </td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
@endsection
