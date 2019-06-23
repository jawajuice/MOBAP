@extends('layout')

@section('content')
<div id="app">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-head">
                    <a href="{{ url('/') }}"><img src="/images/back_icon.png" class="back_icon">
                    <img src="/images/volume.png" class="volume_icon"></a>
                </div>
                <div class="card-1">

                <h1>ŽIVJO</h1>
                <h4>Zaupaj mi svoje ime</h4>
                </div>
                <div class="card-2">

                    <h4>Tvoje ime</h4>
                    <form method="POST" action="/age">
                    @csrf
                      <input type="text" name="name"><br>
                        <button type="submit" class="button-forward" id="name-submit">Create project</button>

                    </form>

                </div>
                <div class="card-3">
                    
                </div>
                <div class="card-4">
                      <div class="progress_container">
                        <div class="bar_active">
                        </div>
                        <div class="bar_inactive">
                        </div>
                        <div class="bar_inactive">
                        </div>
                        <div class="bar_inactive">
                        </div>
                      </div>                    
                </div>





            </div>
        </div>
    </div>
</div>
</div>
@endsection
