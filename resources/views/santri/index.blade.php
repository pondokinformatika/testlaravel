<a href="{{url('santri/create')}}">Create Santri</a>
<br>
@if(Session::has('santri'))
{{Session::get('santri')}}
@endif

<br>
@foreach($santri as $row)

- Nama : {{$row->nama}} 
- Alamat : {{$row->alamat}} 
- Tanggal Lahir : {{$row->tgl_lahir}} 
- Jenis Kelamin : {{$row->jenis_kelamin}}
- <a href="{{url('santri/edit/'.$row->id)}}">Edit</a> 
- <a href="{{url('santri/hapus/'.$row->id)}}">Hapus</a> 
<br>
@endforeach