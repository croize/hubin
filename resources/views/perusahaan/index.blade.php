@foreach($company as $perusahaan)
  {{$perusahaan->name_company}}<br>
  {{$perusahaan->description}}<br>
  {{$perusahaan->address}}<br>
  {{$perusahaan->contact}}<br>
  {{$perusahaan->student}}<br>
  <a href="/company/{{$perusahaan->id}}">View</a>
  <a href="/company/{{$perusahaan->id}}/edit">Edit</a>
  <a href="{{url('company/delete', $perusahaan->id)}}">Delete</a>
@endforeach
