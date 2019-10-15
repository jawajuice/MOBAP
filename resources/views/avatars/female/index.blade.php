@extends('layout')

@section('content')
<div id="appavatar">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-head">
                        <a href="{{ url('/name') }}"><img src="/images/back_icon.png" class="back_icon">
                        <img src="/images/volume.png" class="volume_icon"></a>
                    </div>
                    <div class="card-1">
                        <h1>ŽIVJO</h1>
                        <h1>{{Session::get('user')}}</h1>
                        <h4>FEMALE HIGHER</h4>
                    </div>
                    <div class="card-2">
                    </div>
                    <div class="card-3">
                        <img src="/images/avatar.png" class="avatarimg">
                    </div>
                    <div class="card-4">
                        <button class="button-forward"><a href="/name"><h2>ZAČNI</h2></a></button>
                        <div class="bg_div">
                        </div>                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
