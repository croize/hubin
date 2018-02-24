@extends('layouts.utama')

@section('css')
<link href="{{url('assets/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('assets/bower_components/datatables/buttons.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

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
        <h3 class="box-title m-b-0">Data Perusahaan</h3>
        <p class="text-muted m-b-30">Penambahan, edit dan delete data perusahaan.</p>
        @if(Session::get('message') != NULL)
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('message') }}
        </div>
        @endif
        <a href="/admin/company/create" class="btn btn-info">Create</a><hr>
        <div class="table-responsive">
            <table id="myTable" class="display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Company name</th>
                        <th>Contact</th>
                        <th>Total student</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($company as $perusahaan)
                    <tr>
                        <td>{{$perusahaan->name_company}}</td>
                        <td>{{$perusahaan->contact}}</td>
                        <td>{{$perusahaan->student}}</td>
                        <td><a href="/admin/company/{{$perusahaan->id}}" class="btn btn-info">View</a>
                          <a href="/admin/company/{{$perusahaan->id}}/edit" class="btn btn-warning">Edit</a>
                          <a href="{{url('/admin/company/delete', $perusahaan->id)}}" class="btn btn-danger">Delete</a>
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
$('#myTable').DataTable({
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
});
</script>
@endsection
