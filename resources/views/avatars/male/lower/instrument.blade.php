@extends('layout')

@section('content')
<div id="app" class="appavatar">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-head">
                    <a href="{{ url('/male_trening') }}"><img src="/images/back_icon.png" class="back_icon"></a>
                    <img src="/images/volume.png" class="volume_icon">
                </div>
                <div class="card-1">

                <h1>GLASBENI<br>INŠTRUMENT</h1>
                </div>
                <div class="card-2">
                    @if(Session::get('gender') == 'male')
                        <img src="/images/avatar2.png" class="avatarimg2">
                    @else
                        <img src="/images/avatar.png" class="avatarimg">
                    @endif
                    <div class="text_cloud">

                        <form method="POST" action="/male_risanke" >
                            @csrf

                                <select class="hobi-select" id="hobi-select" name="instrument">
                                  <option value="kitara" class="option-item">Kitara</option>
                                  <option value="bobni" class="option-item">Bobni</option>
                                  <option value="vijolina" class="option-item">Vijolina</option>
                                  <option value="klavir" class="option-item">Klavir</option>
                                  <option value="flauta" class="option-item" >Flauta</option>
                                  <option value="bas" class="option-item">Bass kitara</option>
                                  <option value="petje"class="option-item">Pojem</option>

                                </select>
                                <input type="submit" class="hidden" id="hobi-submit"/>
                        </form>
                        <p>Ali igraš kakšen inštrument?</p>
                        <img src="/images/drum.png"></img>
                </div>
                <div class="card-3">

                    </div>
                </div>
                <div class="card-4">
                    <div class="label-button">
                        <label for="hobi-submit" class="button-forward" tabindex="0" ><h2>NAPREJ</h2></label>
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
