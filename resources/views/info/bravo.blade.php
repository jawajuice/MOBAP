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

                <h1>BRAVO</h1>
                <h1>{{Session::get('user')}}</h1>
                </div>
                <div class="card-2">
                    @if(Session::get('gender') == 'male')
                        <img src="/images/avatar2.png" class="avatarimg2">
                        <div class="text_cloud">
                            <p>Zelo si dragocen!</p>
                        </div>
                    @else
                        <img src="/images/avatar.png" class="avatarimg">
                        <div class="text_cloud">
                            <p>Zelo si dragocena!</p>
                        </div>
                    @endif

                <div class="card-3">

                    </div>
                </div>
                <div class="card-4">
                    <button class="button-forward"><h2><a href="/zanima">Pogovarjajva se še</a></h2></button>
                    <button class="button-forward"><h2>Igrajva se</h2></button>
                    <div class="bg_div">
                    </div>                   
                </div>

            </div>
        </div>
    </div>
</div>
</div>

@endsection
