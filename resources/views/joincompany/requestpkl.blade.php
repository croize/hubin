@if($as != Auth::user()->id)
<a href="/user/requestpkl"
    onclick="event.preventDefault();
             document.getElementById('requestpkl').submit();">
    Join PKL
</a>
<form id="requestpkl" action="/user/requestpkl" method="POST" style="display: none;">
    {{ csrf_field() }}
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
</form>
@else
Tunggu tanggapan admin
<a href="/home">Back to home</a>
@endif
