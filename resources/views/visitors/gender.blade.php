@extends('layout')

@section('content')
<div id="app">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-head">
                        <a href="{{ url('/name') }}"><img src="/images/back_icon.png" class="back_icon">
                        <img src="/images/volume.png" class="volume_icon"></a>
                    </div>
                    <div class="card-1">

                    <h1>ŽIVJO</h1>
                    <h4>Zaupaj mi svoj spol</h4>
                    </div>
                    <div class="card-2">
                        <form method="POST" action="/mood">
                        @csrf
                           <input type="image" value="male" name="gender" src="/images/man.png" class="gender-button">
                        </form>
                        <form method="POST" action="/mood">
                        @csrf
                           <input type="image" value="female"  name="gender" src="/images/voman.png" class="gender-button">
                        </form>
                    </div>
                    <div class="card-3">
                        
                    </div>
                    <div class="card-4">

                          <div class="progress_container">
                            <div class="bar_inactive">
                            </div>
                            <div class="bar_inactive">
                            </div>
                            <div class="bar_active">
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
