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
                    <div class="text_cloud">
                        <p>Najprej sem tukaj jaz, “ime avatarja”. Moja starša sta ločena, tako kot tvoja. Soočam se s podobnimi izzivi kot ti. Če ti je kdaj težko, klikni gumb naprej in tukaj bom zate, pripravljen na pogovor. Vprašaj me karkoli želiš in poskušal ti bom pomagati.</p>
                    </div>
                    @else
                        <img src="/images/avatar.png" class="avatarimg">
                    <div class="text_cloud">
                        <p>Najprej sem tukaj jaz, “ime avatarja”. Moja starša sta ločena, tako kot tvoja. Soočam se s podobnimi izzivi kot ti. Če ti je kdaj težko, klikni gumb naprej in tukaj bom zate, pripravljena na pogovor. Vprašaj me karkoli želiš in poskušala ti bom pomagati.</p>
                    </div>
                    @endif
                </div>
                <div class="card-3">
                </div>

                <div class="card-4">
                    <button class="button-forward"><a href="/male_pomoc2"><h2>NAPREJ</h2></a></button>
                    <div class="bg_div">
                    </div>                   
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
