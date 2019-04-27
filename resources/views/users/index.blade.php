@extends('layouts.app')
@section('content')
<h1>Users</h1>


	@foreach ($users as $user)
	<li>	
		<a href="/users/{{ $user->id}}">



		{{ $user->name }}</li>
		</a>
	@endforeach
@endsection