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

                <h1>SPOZNANJE</h1>
                </div>
                <div class="card-2">
                    <img src="/images/avatar2.png" class="avatarimg2">
                    <div class="text_cloud">
                        <p>Vesel/a sem, da sem te lahko bolje spoznal/a! Sedaj bi te rad/a povabil/a na ogled “sveta aplikacije”.</p>
                </div>
                <div class="card-3">

                    </div>
                </div>
                <div class="card-4">
                    <button class="button-forward"><a href="/male_pomoc"><h2>NAPREJ</h2></a></button>
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
