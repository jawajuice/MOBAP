@extends('layout')

@section('content')
<div id="app" class="appavatar">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-head">
                        <a href="{{ url('/mood') }}"><img src="/images/back_icon.png" class="back_icon">
                        <img src="/images/volume.png" class="volume_icon"></a>
                    </div>
                    <div class="card-1" id="card-1_create">
                        <h1>KREIRANJE </br> AVATARJA</h1>
                    </div>
                    <div class="card-2" id="card-2_create">
                        @if(Session::get('gender') == 'male')
                            <img src="/images/avatar2.png" class="avatarimgcreate1">
                        @else
                            <img src="/images/avatar.png" class="avatarimgcreate1">
                        @endif
                    </div>
                    <div class="card-3" id="card-3_create">
                        <button class="button-forward" id="button-forward_create"><a href="/avatar_start"><h2>NAPREJ</h2></a></button>
                    </div>
                    <div class="card-4" id="card-4_create">
                        <div class="create_button_container">
                            <button class="button-forward_create" ><a href="/avatar/hair"><h2>FRIZURE</h2></a></button>
                            <button class="button-forward_create" ><a href="/avatar/shirt"><h2>MAJICE</h2></a></button>
                            <button class="button-forward_create" ><a href="/avatar/pants"><h2>HLAČE</h2></a></button>
                        </div>
                        <div class="create_button_container" id="container_row2">
                            <button class="button-forward_create" ><a href="/avatar/shoes"><h2>ČEVLJI</h2></a></button>
                            <button class="button-forward_create" ><a href="/avatar/skin"><h2>BARVA KOŽE</h2></a></button>
                        </div>
                        <div class="bg_div_create">
                        </div>
                        <div class="navbar_bot">
                            <div class="navbar_bot_icon_container">
                                <a href="/avatar/hair"><img src="/images/bot_icons/female-hair.png"></a>
                                <a href="/avatar/shirt"><img src="/images/bot_icons/casual-t-shirt-.png"></a>
                                <a href="/avatar/pants"><img src="/images/bot_icons/long-pants.png"></a>
                                <a href="/avatar/shoes"><img src="/images/bot_icons/trail-running-shoe.png"></a>
                                <a href="/avatar/skin"><img src="/images/bot_icons/icons8-skin-96.png"></a>
                            </div>
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
