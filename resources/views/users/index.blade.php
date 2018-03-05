@extends('layouts.utama')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Data Perusahaan</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li class="active">Data Perusahaan</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="col-sm-12">
    <div class="white-box">
        <h3 class="box-title m-b-0">Data User</h3>
        <p class="text-muted m-b-30">Penambahan, edit dan delete data user.</p>
        @if(Session::get('message') != NULL)
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('message') }}
        </div>
        @endif
        <a href="/admin/users/create" class="btn btn-info">Create</a><hr>
        <div class="panel">
          <form class="" action="/admin/users" method="get">
            <div class="col-sm-9">

            </div>
            <div class="input-group m-t-10 col-sm-3">
            <input type="text" id="example-input2-group2" name="search" class="form-control" placeholder="Search">
            <span class="input-group-btn"><button type="button" class="btn waves-effect waves-light btn-info"> <i class="fa fa-search"></i> </button>
            </div>
          </form>

            <div class="table-responsive">
                <table class="table table-hover manage-u-table">
                    <thead>
                        <tr>
                            <th style="width: 70px;" class="text-center">NO</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Class</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(count($user))
                      @if($search != NULL)
                        Hasil untuk data {{$search}} :
                      @endif
                      @foreach($user as $users)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td><span class="font-medium">{{$users->name}}</span></td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->class}}</td>
                            <td>
                              <a href="/admin/users/{{$users->id}}" class="btn btn-info btn-outline btn-circle btn-lg m-r-5">
                                  <i class="fa fa-eye"></i>
                              </a>
                              <a href="/admin/users/{{$users->id}}/edit" class="btn btn-info btn-outline btn-circle btn-lg m-r-5">
                                  <i class="fa fa-pencil"></i>
                              </a>
                              <a href="{{url('/admin/users/delete', $users->id)}}" class="btn btn-info btn-outline btn-circle btn-lg m-r-5">
                                  <i class="fa fa-trash-o"></i>
                              </a>
                            </td>
                        </tr>
                      @endforeach

                      @else
                      <tr>
                        <td colspan="5" class="text-center"> Data tidak ada</td>
                      </tr>
                    @endif
                    </tbody>
                </table>
                <div class="btn-group col-md-offset-5">
                    <button type="button" class="btn btn-default waves-effect">{!! $user->links() !!}</button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
