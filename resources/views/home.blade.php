@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br>

                    @if($cit != NULL)
                      @foreach($lala as $waa)
                          @if($waa->id == $ge)
                          {{$waa->name_company}}
                            @foreach($pen as $rw)
                              @if($rw->company_id == $ge)
                                {{$rw->User['name']}}
                              @endif
                            @endforeach
                          @endif
                      @endforeach
                      <a href="{{url('delete',$cit)}}">Cancel join</a>
                  @else
                  @foreach($lala as $su)
                  <form class="" action="join" method="post">
                    {{csrf_field()}}
                  <input type="hidden" name="company_id" value="{{$su->id}}">
                  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                  {{$su->name_company}}<br>
                  {{$su->description}}<br>
                  {{$su->address}}<br>
                  {{$su->contact}}<br>
                  Sisa kuota : {{$su->student}}
                  <input type="submit" name="" value="Join">
                  </form>
                  @endforeach
                  @endif







                </div>
            </div>
        </div>
    </div>
</div>
@endsection
