@extends('layouts.app')

@section('content')

	<h1 class="title">{{ $user->name }}</h1>


	<div class="content">{{ $user->email }}
	</div>
		<div class="content">{{ $user->created_at }}
	</div>
			<div class="content">{{ $user->updated_at }}
	</div>
	</div>
			<div class="content">{{ $user->admin }}
	</div>

	<div class="content">

		<a href="/forms/{{ $user->id }} /edit">
			<p>Edit</p>

		</a>

	</div>

	
@endsection 