@extends('layout')

@section('content')
<div id="app" class="appvisitors">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-head">
                        <a href="{{ url('/name') }}"><img src="/images/back_icon.png" class="back_icon"></a>
                        <img src="/images/volume.png" class="volume_icon">
                    </div>
                    <div class="card-1">

                    <h1>ŽIVJO</h1>
                    <h4>Zaupaj mi svojo starost</h4>
                    </div>
                    <div class="card-2">

                        <h2>Starost</h2>
                        <form method="POST" action="/gender">
                        @csrf
                        <div class="radiobuttons">
                          <label class="box_container"><h4>6-8</h4>
                              <input type="radio" checked="checked" value="lower" name="age">
                              <span class="checkmark"></span>
                            </label>

                            <label class="box_container"><h4>9-12</h4>
                              <input type="radio" value="higher" name="age">
                              <span class="checkmark"></span>
                            </label>
                           <input type="submit" class="hidden" id="age-submit" />
                        </form>
                        </div>
                    </div>
                    <div class="card-3">
                    <div class="label-button">
                        <label for="age-submit" class="button-forward_start" tabindex="0" ><h2>NAPREJ</h2></label>
                    </div>
                    </div>
                    <div class="card-4">

                          <div class="progress_container">
                            <div class="bar_inactive">
                            </div>
                            <div class="bar_active">
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
