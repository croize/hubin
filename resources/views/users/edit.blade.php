@extends('layouts.utama')

@section('css')
  <link rel="stylesheet" href="{{url('assets/css/select2.min.css')}}">
@endsection

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Create Users</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="/admin/users">Users</a></li>
            <li class="active">Create Users</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Edit Users</h3>
              <!-- general form elements -->

<form class="" action="/admin/users/{{$user->id}}" method="post" role="form">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="put">
<div class="box-body">
<div class="form-group">
  <label for="exampleInputEmail1">Fullname</label>
  <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Fullname" value="{{$user->name}}" required>
</div>
<div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
  <label for="exampleInputPassword1">Contact</label>
  <input type="text" class="form-control" name="contact_user" id="exampleInputPassword1" placeholder="Enter Contact" value="{{$user->contact_user}}" required>
  @if ($errors->has('contact'))
      <span class="help-block">
          <strong>{{ $errors->first('contact') }}</strong>
      </span>
  @endif
</div>
<div class="form-group{{ $errors->has('class') ? ' has-error' : '' }}">
  <label for="">Class</label>
  <select class="js-example-basic-single form-control" name="class" required>
    <option value=""></option>
    <optgroup label="Analis Kimia">
      <option value="XIII-AK 1" @if($user->class == "XIII-AK 1") selected @endif>XIII-AK 1</option>
      <option value="XIII-AK 2" @if($user->class == "XIII-AK 2") selected @endif>XIII-AK 2</option>
      <option value="XIII-AK 3" @if($user->class == "XIII-AK 3") selected @endif>XIII-AK 3</option>
      <option value="XIII-AK 4" @if($user->class == "XIII-AK 4") selected @endif>XIII-AK 4</option>
      <option value="XIII-AK 5" @if($user->class == "XIII-AK 5") selected @endif>XIII-AK 5</option>
      <option value="XIII-AK 6" @if($user->class == "XIII-AK 6") selected @endif>XIII-AK 6</option>
    </optgroup>
    <optgroup label="Teknik Komunikasi dan Jaringan">
      <option value="XII-TKJ 1" @if($user->class == "XII-TKJ 1") selected @endif>XII-TKJ 1</option>
      <option value="XII-TKJ 2" @if($user->class == "XII-TKJ 2") selected @endif>XII-TKJ 2</option>
      <option value="XII-TKJ 3" @if($user->class == "XII-TKJ 3") selected @endif>XII-TKJ 3</option>
    </optgroup>
    <optgroup label="Rekayasa Perangkat Lunak">
      <option value="XII-RPL 1" @if($user->class == "XII-RPL 1") selected @endif>XII-RPL 1</option>
      <option value="XII-RPL 1" @if($user->class == "XII-RPL 2") selected @endif>XII-RPL 2</option>
    </optgroup>
  </select>
  @if ($errors->has('class'))
      <span class="help-block">
          <strong>{{ $errors->first('class') }}</strong>
      </span>
  @endif
</div>
<div class="form-group{{ $errors->has('class') ? ' has-error' : '' }}">
  <label for="">Jurusan</label>
  <select class="js-example-basic-single form-control" name="jurusan">
    <option value=""></option>
    <option value="1" @if($user->jurusan == 1) selected @endif>Analis Kimia</option>
    <option value="2" @if($user->jurusan == 2) selected @endif>Rekayasa Perangkat Lunak</option>
    <option value="3" @if($user->jurusan == 3) selected @endif>Teknik Komunikasi dan Jaringan</option>
  </select>
  @if ($errors->has('class'))
      <span class="help-block">
          <strong>{{ $errors->first('class') }}</strong>
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

@section('js')
    <script src="{{url('assets/js/select2.full.min.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
  $('.js-example-basic-single').select2();
});
    </script>
@endsection
