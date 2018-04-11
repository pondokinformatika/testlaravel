<ul>
	@foreach($errors->all() as $row)
		<li>{{$row}}</li>
	@endforeach
</ul>

<form action="{{url('user/create')}}" method="post">
	{{csrf_field()}}

	Nama : <input type="text" name="name" value="{{old('name')}}"><br>

	Email : <input type="text" name="email" value="{{old('email')}}"><br>

	Password : <input type="password" name="password"><br>

	<button type="submit">Submit</button>
</form>