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
                        <h1>SPOZNANJE</h1>
                    </div>
                    <div class="card-2">
                        @if(Session::get('gender') == 'male')
                            <img src="/images/avatar2.png" class="avatarimg2">
                        @else
                            <img src="/images/avatar.png" class="avatarimg">
                        @endif
                        <div class="text_cloud">
                            <p>Vesela sem, da sem te lahko bolje spoznala! Sedaj bi te rada povabila na ogled “sveta aplikacije”.</p>
                        </div>
                    </div>
                    <div class="card-3">
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
