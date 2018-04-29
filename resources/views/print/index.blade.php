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
        <h3 class="box-title m-b-0">Print surat prakerin</h3>
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
                        <th>Nama Perusahaan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($pn as $pe)
                    <tr>
                        <td>{{$pe->name_company}}</td>
                        <td>
                          <a href="/admin/printdata/{{$pe->id}}" class="btn btn-info btn-outline btn-circle btn-lg m-r-5">
                              <i class="fa fa-print"></i>
                          </a>
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
