@extends('layouts.utama')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Detail Company</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="/admin/company">Company</a></li>
            <li class="active">{{$view->name_company}}</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <div class="">
                <h2 class="m-b-0 m-t-0">{{$view->name_company}}</h2>
                <hr>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="box-title m-t-40">General Info</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="390">Description</td>
                                        <td> {{$view->description}} </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-map-marker"></i>  Address</td>
                                        <td> {{$view->address}} </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-phone-square"></i>  Contact</td>
                                        <td> {{$view->contact}} </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-users"></i> Total student</td>
                                        <td>
                                          @if($view->student == 0)
                                          <small class="label bg-green" style="background-color: red;">FULL</small>
                                          @else
                                          <small class="label bg-green" style="background-color: green;">{{$view->student}} Available</small></td>
                                          @endif
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
