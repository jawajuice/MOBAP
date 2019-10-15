@extends('layout')

@section('content')
<div id="app" class="appvisitors">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-head">
                        <a href="{{ url('/age') }}"><img src="/images/back_icon.png" class="back_icon"></a>
                        <img src="/images/volume.png" class="volume_icon">
                    </div>
                    <div class="card-1">
                        <h1>ŽIVJO</h1>
                        <h4>Zaupaj mi svoj spol</h4>
                    </div>
                    <div class="card-2">
                        <div class="gender-wrap">
                            <form method="POST" action="/avatar_name">
                            @csrf
                            <div class="gender-container">
                               <button type="submit" value="male" name="gender" class="gender-button-m">
                                <img src="/images/man.png" id="gender-img">
                               </button>
                            </div>
                            </form>
                            <form method="POST" action="/mood">
                            @csrf
                            <div class="gender-container">
                               <button type="submit" value="female" name="gender" class="gender-button">
                                <img src="/images/voman.png" id="gender-img">
                               </button>
                            </div>
                            </form>
                        </div>
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
