@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Forms</div>
                	@if ($forms->count())
					@foreach ($forms as $form)
					<div class="card-body">
						<li>	
							<a href="/forms/{{ $form->id}}">
								{{ $form->title }}
								
							</a>
						</li>
					</div>
					@endforeach
					@else
						<a href="/forms/create">
								<p>Create new project</p>
						</a>
					@endif
                </div>
            </div>
        </div>
    </div>
</div>


@endsection