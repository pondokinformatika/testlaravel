<form action="{{url('user/update')}}" method="post">
	{{csrf_field()}}

	<input type="hidden" name="id" value="{{$user->id}}">
	Nama : <input type="text" name="name" value="{{$user->name}}"><br>

	Email : <input type="text" name="email" value="{{$user->email}}"><br>

	Password : <input type="password" name="password" value="{{$user->password}}"><br>

	
	<button type="submit">Update</button>
</form>