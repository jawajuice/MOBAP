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

                <h1>POMOČ</h1>
                </div>
                <div class="card-2">
                    @if(Session::get('gender') == 'male')
                        <img src="/images/avatar2.png" class="avatarimg2">
                    @else
                        <img src="/images/avatar.png" class="avatarimg">
                    @endif
                    <div class="text_cloud">
                        <p>V mojem svetu lahko počneš veliko stvari. Potrkaj spodaj in poklepetaj z mano.</p>
                </div>
                <div class="card-3">

                    </div>
                </div>
                <div class="card-4">
                    <button class="button-forward"><a href="/zanima"><h2>POTRKAJ</h2></a></button>
                    <div class="bg_div">
                    </div>                   
                </div>

            </div>
        </div>
    </div>
</div>
</div>

@endsection
