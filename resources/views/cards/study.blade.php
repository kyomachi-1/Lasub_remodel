@extends('layouts.app')

@section('content')
    @if(count($cards) > 0)
        @foreach ($cards as $card)
    <div class="container-fluid" style="font-weight: bold; position: relative;">   
        <div class="row row-container justify-content-center">
            <div id="card_front_text" class="col-12 card_front"><div class="card-text">{{ $card->card_front }}</div></div>
            <div id="card_back_text" class="col-12 card_back"><div class="card-text">{{ $card->card_back }}</div></div>
        </div>
        {!! $cards->links('vendor/pagination/defaultSpin',['card' => $card]) !!}

    </div>

        @endforeach
    @endif
@endsection