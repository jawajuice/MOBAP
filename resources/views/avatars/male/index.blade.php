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

                <h1>ŽIVJO</h1>
                <h1>{{Session::get('user')}}</h1>
                <h4>MALE HIGHER</h4>
                </div>
                <div class="card-2">

                </div>
                <div class="card-3">
                    <img src="/images/avatar2.png" class="avatarimg2">
                    <div class="text_cloud">
                        <p><b>Živjo {{Session::get('user')}}</b>
                            <br>Hvala, da si mi dal tako lepo ime in me uredil!
                        </p>
                    </div>
                </div>
                <div class="card-4">
                    <button class="button-forward"><a href="/male_name"><h2>NAPREJ</h2></a></button>

                    <div class="bg_div">
                    </div>                   
                </div>





            </div>
        </div>
    </div>
</div>
</div>
@endsection
