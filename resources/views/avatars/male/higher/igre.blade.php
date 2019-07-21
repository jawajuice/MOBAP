@extends('layout')

@section('content')
<div id="app" class="appavatar">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-head">
                    <a href="{{ url('/male_glasba') }}"><img src="/images/back_icon.png" class="back_icon"></a>
                    <img src="/images/volume.png" class="volume_icon">
                </div>
                <div class="card-1">

                <h1>IGRE</h1>
                </div>
                <div class="card-2">
                    @if(Session::get('gender') == 'male')
                        <img src="/images/avatar2.png" class="avatarimg2">
                    <div class="text_cloud">
                        <p>Katere družabne ali računalniške igre rad igraš?</p>
                        <img src="/images/monster.png"></img>
                        <form method="POST" action="/male_idol" >
                            @csrf
                            <input type="text" name="igre" class="prijatelji-input">
                             <input type="submit" class="hidden" id="igre-submit"/>
                        </form>
                        
                    </div>
                    @else
                        <img src="/images/avatar.png" class="avatarimg">
                    <div class="text_cloud">
                        <p>Katere družabne ali računalniške igre rada igraš?</p>
                        <img src="/images/monster.png"></img>
                        <form method="POST" action="/male_idol" >
                            @csrf
                            <input type="text" name="igre" class="prijatelji-input">
                             <input type="submit" class="hidden" id="igre-submit"/>
                        </form>
                        
                    </div>
                    @endif

                <div class="card-3">

                    </div>
                </div>
                <div class="card-4">
                    <div class="label-button">
                        <label for="igre-submit" class="button-forward" tabindex="0" ><h2>NAPREJ</h2></label>
                    </div>

                    <div class="bg_div">
                    </div>                   
                </div>

                <div class="dim">
                </div>

            </div>
        </div>
    </div>
</div>
</div>

@endsection
