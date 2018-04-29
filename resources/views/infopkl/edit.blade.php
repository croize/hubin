@extends('layouts.utama')
@section('css')
  <link href="{{url('assets/bower_components/clockpicker/dist/jquery-clockpicker.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">EDIT PRAKERIN</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="/admin">PRAKERIN</a></li>
            <li class="active">EDIT PRAKERIN</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Create Company</h3>
              <!-- general form elements -->

<form class="" action="/admin/infopkl/1" method="post" role="form">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="put">
<div class="box-body">
<div class="form-group">
  <label for="exampleInputEmail1">Date</label>
  <div class="input-group">
      <input type="date" class="form-control" name="date" value="{{$info->date}}"> <span class="input-group-addon"></span> </div>
</div>
<div class="form-group">
  <label for="exampleInputEmail1">Time</label>
  <div class="input-group clockpicker">
      <input type="text" class="form-control clockpicker" name="jam" value="{{$info->jam}}"> <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> </span>
  </div>
</div>
</div>
<!-- /.box-body -->

<div class="box-footer">
<input type="submit" name="" value="Submit" class="btn btn-primary">
</div>
</form>

<!-- /.box -->
        </div>
    </div>
</div>
@endsection

@section('js')
<!-- Date range Plugin JavaScript -->
<script src="{{url('assets/bower_components/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
<script type="text/javascript">
$('.clockpicker').clockpicker({
    donetext: 'Done',
}).find('input').change(function() {
    console.log(this.value);
});
</script>

@endsection
