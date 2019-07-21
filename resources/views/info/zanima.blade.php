@extends('layout')

@section('content')
<div id="app" class="appavatar">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <div class="bg_div_upper" id="zanima-bg">
                    </div>    
                <div class="card-head">
                    <a href="{{ url('/male_pomoc2') }}"><img src="/images/back_icon.png" class="back_icon"></a>
                    <img src="/images/volume.png" class="volume_icon">
                </div>
                <div class="card-1">

                <h1>KAJ TE </br>ZANIMA?</h1>
                </div>
                <div class="card-2">

                </div>
                <div class="card-3" id="zanima-card-3">
                    <div class="question_cloud">
                        <p>Najpogostejša </br>vprašanja</p>
                    </div>

                    <div class="question_cloud">
                        <a href="/info_locitev"><p>Ločitev</p></a>
                    </div>

                    <div class="question_cloud">
                        <p>Starši</p>
                    </div>
                    <div class="question_cloud">
                        <p>Počutje</p>
                    </div>
                    <div class="question_cloud">
                        <p>Prihodnost</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
