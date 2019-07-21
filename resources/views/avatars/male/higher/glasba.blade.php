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

                <h1>GLASBA</h1>
                </div>
                <div class="card-2">
                    @if(Session::get('gender') == 'male')
                        <img src="/images/avatar2.png" class="avatarimg2">
                    @else
                        <img src="/images/avatar.png" class="avatarimg">
                    @endif
                    <div class="text_cloud">

                        <form method="POST" action="/male_igre" >
                            @csrf

                                <select class="hobi-select" id="hobi-select" name="glasba">
                                  <option value="rock" class="option-item">Rock</option>
                                  <option value="metal" class="option-item">Metal</option>
                                  <option value="pop" class="option-item">Pop</option>
                                  <option value="house" class="option-item">House</option>
                                  <option value="synthwave" class="option-item">Synthwave</option>
                                  <option value="rap" class="option-item">Rap</option>
                                  <option value="indie"class="option-item">Indie</option>

                                </select>
                                <input type="submit" class="hidden" id="glasba-submit"/>
                        </form>
                    @if(Session::get('gender') == 'male')
                        <p>Kakšno glasbo rad poslušaš?</p>
                    @else
                        <p>Kakšno glasbo rada poslušaš?</p>
                    @endif
                        <img src="/images/drum.png"></img>
                </div>
                <div class="card-3">

                    </div>
                </div>
                <div class="card-4">
                    <div class="label-button">
                        <label for="glasba-submit" class="button-forward" tabindex="0" ><h2>NAPREJ</h2></label>
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
