@extends('layout')

@section('content')
<div id="app" class="appavatar">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-head">
                    <a href="{{ url('/name') }}"><img src="/images/back_icon.png" class="back_icon">
                    <img src="/images/volume.png" class="volume_icon"></a>
                </div>
                <div class="card-1">

                <h1>RISANKE</h1>
                </div>
                <div class="card-2">
                    <img src="/images/avatar2.png" class="avatarimg2">
                    <div class="text_cloud">

                        <form method="POST" action="/male_prijatelji" >
                            @csrf

                                <select class="hobi-select" id="hobi-select" name="risanke">
                                  <option value="tominjeri" class="option-item">Tom & Jerry</option>
                                  <option value="smuk" class="option-item">Palček smuk</option>
                                  <option value="smrkci" class="option-item">Smrkci</option>
                                  <option value="bojan" class="option-item">Bojan</option>
                                  <option value="pepa" class="option-item">Pujsa Pepa</option>
                                  <option value="panter" class="option-item">Pink Panter</option>
                                  <option value="baltazar"class="option-item">Baltazar</option>
                                </select>
                                <input type="submit" class="hidden" id="risanke-submit"/>
                        </form>
                        <p>Rad gledaš risanke?</p>
                        <img src="/images/monster.png"></img>
                </div>
                <div class="card-3">

                    </div>
                </div>
                <div class="card-4">
                    <div class="label-button">
                        <label for="risanke-submit" class="button-forward" tabindex="0" ><h2>NAPREJ</h2></label>
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
