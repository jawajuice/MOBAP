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

                <h1>KAKO SI?</h1>
                <h4>Kako se počutiš {{Session::get('user')}}?</h4>
                </div>
                <div class="card-2">

                    <form method="POST" action="/mood">
                    @csrf
                        <div class="cc-selector">
                            <input id="confused" type="radio" name="credit-card" value="confused" />
                            <label class="drinkcard-cc confused" for="confused"></label>
                            <input id="angry" type="radio" name="credit-card" value="angry" />
                            <label class="drinkcard-cc angry"for="angry"></label>
                            <input id="happy" type="radio" name="credit-card" value="happy" />
                            <label class="drinkcard-cc happy"for="happy"></label>
                        </div>
                        <div class="cc-selector">
                            <input id="sunglass" type="radio" name="credit-card" value="sunglass" />
                            <label class="drinkcard-cc sunglass" for="sunglass"></label>
                            <input id="wink" type="radio" name="credit-card" value="wink" />
                            <label class="drinkcard-cc wink" for="wink"></label>
                            <input id="crying" type="radio" name="credit-card" value="crying" />
                            <label class="drinkcard-cc crying" for="crying"></label>
                        </div>
                        <div class="cc-selector">
                            <input id="smile" type="radio" name="credit-card" value="smile" />
                            <label class="drinkcard-cc smile" for="smile"></label>
                            <input id="depression" type="radio" name="credit-card" value="depression" />
                            <label class="drinkcard-cc depression" for="depression"></label>
                            <input id="sleepi" type="radio" name="credit-card" value="sleepi" />
                            <label class="drinkcard-cc sleepi" for="sleepi"></label>
                        </div>

                    </form>
                    <form method="POST" action="/avatar">
                    @csrf
                       <input type="submit" value="NAPREJ" class="button-forward" id="name-submit">
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
                        <div class="bar_inactive">
                        </div>
                        <div class="bar_active">
                        </div>
                      </div>                    
                </div>





            </div>
        </div>
    </div>
</div>
</div>
@endsection
