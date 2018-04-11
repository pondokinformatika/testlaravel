<a href="{{url('user/create')}}">Create user</a>
<br>
@if(Session::has('user'))
{{Session::get('user')}}
@endif

<br>
@foreach($user as $row)

- Nama : {{$row->name}} 
- Email : {{$row->email}} 
- Password : {{$row->password}} 
- <a href="{{url('user/edit/'.$row->id)}}">Edit</a> 
- <a href="{{url('user/hapus/'.$row->id)}}">Hapus</a> 
<br>
@endforeach

{{$user->links()}}