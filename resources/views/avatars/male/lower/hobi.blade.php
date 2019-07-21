@extends('layout')

@section('content')
<div id="app" class="appavatar">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-head">
                    <a href="{{ URL::previous() }}"><img src="/images/back_icon.png" class="back_icon"></a>
                    <img src="/images/volume.png" class="volume_icon">
                </div>
                <div class="card-1">

                <h1>ŠPORT</h1>
                </div>
                <div class="card-2">
                    @if(Session::get('gender') == 'male')
                        <img src="/images/avatar2.png" class="avatarimg2">
                    @else
                        <img src="/images/avatar.png" class="avatarimg">
                    @endif
                    <div class="text_cloud">
                        <p>Ali kaj treniraš?</p>
                        <img src="/images/running.png"></img>
                        <form method="POST" action="/male_instrument" >
                            @csrf

                                <select class="hobi-select" id="hobi-select" name="trening">
                                  <option value="nogomet" class="option-item">Nogomet</option>
                                  <option value="kosarka" class="option-item">Košarka</option>
                                  <option value="borilne" class="option-item">Borilne veščine</option>
                                  <option value="plavanje" class="option-item">Plavanje</option>
                                  <option value="odbojka" class="option-item" >Odbojka</option>
                                  <option value="ples" class="option-item" >Ples</option>
                                  <option value="gimnastika"class="option-item">Gimnastika in atletika</option>
                                  <option value="smucanje" class="option-item">Smučanje</option>
                                  <option value="rokomet" class="option-item">Rokomet</option>
                                </select>
                                <input type="submit" class="hidden" id="hobi-submit"/>
                        </form>

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
