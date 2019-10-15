@extends('layout')

@section('content')
<div id="app" class="appavatar">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-head">
                        <a href="{{ url('/avatar/shirt') }}"><img src="/images/back_icon.png" class="back_icon">
                        <img src="/images/volume.png" class="volume_icon"></a>
                    </div>
                    <div class="card-1" id="card-1_create">
                        <h1>HLAČE</h1>
                    </div>
                    <div class="card-2" id="card-2_create">
                        @if(Session::get('gender') == 'male')
                            <img src="/images/avatar2.png" class="avatarimgshirt">
                        @else
                            <img src="/images/avatar.png" class="avatarimgshirt">
                        @endif
                           <img src="/images/create/group_315.png" id="right_scrollbar">
                    </div>
                    <div class="card-3" id="card-3_create">
                    </div>
                    <div class="card-4" id="card-4_create">
                        <div class="bg_div_create">
                            <div class="icon_container">
                                 <div class="upper_arrow">
                                    <a href="/avatar/create"><img src="/images/create/arrow_down.png"></a>
                                 </div>
                                 <div class="mid_arrow">
                                    <a href="/avatar/shirt"><img src="/images/create/arrow_left.png"></a><h2>HLAČE</h2><a href="/avatar/shoes"><img src="/images/create/arrow_right.png"></a>
                                </div>
                                <img src="/images/create/hlace.png" id="majiceimg">
                            </div>
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
