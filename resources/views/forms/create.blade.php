<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>
<body>
<div class="container">
	<h1 class="title">Create a new project</h1>

	<form method="POST" action="/forms">

		{{ csrf_field() }}
		<div class="field">


			<label class="label" for="title">Form title</label>

			<div class="control">

				<input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" value="{{ old('title') }}">
			</div>
		</div>

		<div class="field">
			<div class="control">
				<textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" >{{ old('description') }}</textarea>

			</div>
		</div>
		<div class="field">
			<div class="control">
				
				<button type="submit">Create project</button>
			</div>
		</div>
			@include('errors')
	</form>
</div>
</body>
</html>