@extends('layouts.app')

@section('content')

	<h1 class="title">{{ $form->title }}</h1>
	<div class="content">{{ $form->description }}
	</div>
	<div class="content">
	</div>
		@if ($form->count())
			<div>
				@foreach ($form as $task)
					<div class="box">
					</div>
				@endforeach
			</div>
		@endif
	<form class="box" method="POST" action="/projects/{{$form->id}}/tasks">
		@csrf
		 <div class="field">
		 	<label class="label" for="description"></label>
		 	<div class="control">
		 		<input type="text" name="description" class="input {{ $errors->has('description') ? 'is-danger' : '' }}" value="{{ old('description') }}">
		 	</div>
		 	<button type="submit">Submit</button>
		 </div>
		 	@include('errors')
	</form>
	
@endsection 