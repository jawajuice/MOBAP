<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h1>Users</h1>


	@foreach ($users as $user)
	<li>	
		<a href="/users/{{ $user->id}}">



		{{ $user->name }}</li>
		</a>
	@endforeach

</body>
</html>