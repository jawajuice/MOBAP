@extends ('layout')

@section('content')
	<h1 class="title">Edit form</h1>
	<form method="POST" action="/forms/{{ $form->id }}">
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="field">
			<label class="label" for="title">Title</label>
			<div class="control">
				<input type="text" class="input" name="title" placeholder="Title" value="{{ $form->title }}">
			</div>
		</div>
		<div class="field">
			<label class="label" for="description">Description</label>
			<div class="control">
				<textarea name="description" class="textarea">{{ $form->description }}</textarea>
			</div>
		</div>
		<div class="field">
			<div class="control">
				<button type="submit" class="button is-link">Update Project</button>
			</div>
		</div>
	</form>
		<form method="POST" action="/forms/{{ $form->id }}">
			@method('DELETE')
			@csrf
			<div class="field">
				<div class="control">
					<button type="submit" class="button is-link">Delete Project</button>
				</div>
			</div>
		</form>
@endsection 