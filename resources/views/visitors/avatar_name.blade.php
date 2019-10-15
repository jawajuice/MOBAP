@extends('layout')

@section('content')
<div id="app" class="appvisitors">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-head">
                        <a href="{{ url('/') }}"><img src="/images/back_icon.png" class="back_icon"></a>
                        <img src="/images/volume.png" class="volume_icon">
                    </div>
                    <div class="card-1">
                    <h1>IZBERI</h1>
                        @if(Session::get('gender') == 'male')
                        <h4>Izbral si fanta</h4>
                        @else
                        <h4>Izbral si punco</h4>
                        @endif
                    </div>
                    <div class="card-2">
                        <h4>Ime avatarja</h4>
                        <form method="POST" action="/mood">
                        @csrf
                          <input type="text" name="avatar_name"><br>
                            <input type="submit" class="hidden" id="name-submit" />
                        </form>
                        @if(Session::get('gender') == 'male')
                            <img src="/images/man.png" id="gender-img">
                                    <h5>Fant</h5>
                        @else
                            <img src="/images/voman.png" id="gender-img">
                                    <h5>Punca</h5>
                        @endif
                    </div>
                    <div class="card-3">
                        <div class="label-button">
                            <label for="name-submit" class="button-forward_start" tabindex="0" ><h2>NAPREJ</h2></label>
                        </div>
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
<script type="text/javascript">
    $(document).ready(function(){
        $( "#target" ).focus(function() {
          alert( "Handler for .focus() called." );
        });
    });
</script>
@endsection
