@extends('layouts.utama')

@section('css')
<link href="{{url('assets/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('assets/bower_components/datatables/buttons.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Data User Request PKL</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li class="active">Data Request</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="col-sm-12">
    <div class="white-box">
        <h3 class="box-title m-b-0">Data Request PKL</h3>
        <p class="text-muted m-b-30"></p>
        @if(Session::get('message') != NULL)
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('message') }}
        </div>
        @endif
        <div class="table-responsive">
            <table id="myTable" class="display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($company as $perusahaan)
                    <tr>
                        <td>{{$perusahaan->Users['name']}}</td>
                        <td>{{$perusahaan->Users['class']}}</td>
                        <td>
                          <a href="/admin/userrequest"
                              onclick="event.preventDefault();
                                       document.getElementById('accepted').submit();" class="btn btn-success">
                              <i class="fa fa-check"></i>
                          </a>
                          <form id="accepted" action="/admin/userrequest/{{$perusahaan->id}}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                              <input type="hidden" name="_method" value="put">
                              <input type="hidden" name="id" value="{{$perusahaan->id}}">
                              <input type="hidden" name="akses" value="1">
                              <input type="hidden" name="user_id" value="{{$perusahaan->user_id}}">
                          </form>
                          <a href="/admin/userrequest"
                              onclick="event.preventDefault();
                                       document.getElementById('denied').submit();" class="btn btn-danger">
                              X
                          </a>
                          <form id="denied" action="/admin/userrequest/{{$perusahaan->id}}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                              <input type="hidden" name="_method" value="put">
                              <input type="hidden" name="id" value="{{$perusahaan->id}}">
                              <input type="hidden" name="akses" value="0">
                              <input type="hidden" name="user_id" value="{{$perusahaan->user_id}}">
                          </form>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{url('assets/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/bower_components/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{url('assets/bower_components/datatables/buttons.flash.min.js')}}"></script>
<script src="{{url('assets/bower_components/datatables/jszip.min.js')}}"></script>
<script src="{{url('assets/bower_components/datatables/pdfmake.min.js')}}"></script>
<script src="{{url('assets/bower_components/datatables/vfs_fonts.js')}}"></script>
<script src="{{url('assets/bower_components/datatables/buttons.html5.min.js')}}"></script>
<script src="{{url('assets/bower_components/datatables/buttons.print.min.js')}}"></script>
<script>
$('#myTable').DataTable();
</script>
@endsection
