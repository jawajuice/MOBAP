<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h1>Project</h1>


	@foreach ($forms as $form)
	<li>	
		<a href="/forms/{{ $form->id}}">



		{{ $form->title }}</li>
		</a>
	@endforeach

	<a href="/forms/create" style="{{Auth::guest() ? 'display: none' : ''}}">
			<p>Create new project</p>

		</a>
</body>
</html>