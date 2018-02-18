@extends('layouts.utama')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Create Company</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="#">Company</a></li>
            <li class="active">Create Company</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Create Company</h3>
              <!-- general form elements -->

<form class="" action="/company/{{$view->id}}" method="post" role="form">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="put">
<div class="box-body">
<div class="form-group">
  <label for="exampleInputEmail1">Name Company</label>
  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$view->name_company}}" name="name_company" placeholder="Enter Name Company" required>
</div>
<div class="form-group">
  <label for="exampleInputPassword1">Description</label>
  <textarea class="form-control" id="" cols="30" name="description" rows="6" placeholder="Enter Description" required>{{$view->description}}</textarea>
</div>
<div class="form-group">
  <label for="exampleInputPassword1">Addrest</label>
  <input type="text" class="form-control" name="address" id="exampleInputPassword1" placeholder="Enter Addrest" value="{{$view->address}}" required>
</div>
<div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
  <label for="exampleInputPassword1">Contact</label>
  <input type="text" class="form-control" name="contact" id="exampleInputPassword1" placeholder="Enter Contact" required value="{{$view->contact}}">
  @if ($errors->has('contact'))
      <span class="help-block">
          <strong>{{ $errors->first('contact') }}</strong>
      </span>
  @endif
</div>
<div class="form-group{{ $errors->has('student') ? ' has-error' : '' }}">
  <label for="exampleInputPassword1">Total Student</label>
  <input type="text" class="form-control" name="student" required id="exampleInputPassword1" placeholder="Enter Student" value="{{$view->student}}" required>
  @if ($errors->has('student'))
      <span class="help-block">
          <strong>{{ $errors->first('student') }}</strong>
      </span>
  @endif
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
