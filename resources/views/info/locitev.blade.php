@extends('layout')

@section('content')
<div id="app" class="appavatar">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                        <div class="bg_div_upper">
                        </div>    
                    <div class="card-head">
                        <a href="{{ url('/zanima') }}"><img src="/images/back_icon.png" class="back_icon"></a>
                        <img src="/images/volume.png" class="volume_icon">
                    </div>
                    <div class="card-1">
                        <h2>Kaj pomeni ločiti se?</h2>
                    </div>
                    <div class="card-2">
                    </div>
                    <div class="card-3" id="zanima-card-3">
                        <div class="question_cloud">
                            <p>To lahko pomeni, da dva ne živita več skupaj.</p>
                        </div>
                        <div class="question_cloud">
                            <p>Pomeni, da nimata več skupnega gospodinjstva.</p>
                        </div>
                        <div class="question_cloud">
                            <p>Da ne spita več v isti postelji.</p>
                        </div>
                    </div>
                    <div class="card-4">
                        <button class="button-forward"><a href="/locitev2"><h2>NAPREJ</h2></a></button>
                          <div class="progress_container">
                            <div class="bar_active">
                            </div>
                            <div class="bar_inactive">
                            </div>
                            <div class="bar_inactive">
                            </div>
                          </div>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
