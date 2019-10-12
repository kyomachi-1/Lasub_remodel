@extends('layouts.app')

@section('content')
    {{-- ナビゲーション --}}
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('cards.index',['id' => $ring->id]) }}">
                <i class="fas fa-angle-left pr-2" style="color: #32a4a8"></i>
                {{ $ring->ring_name }}
            </a>

            <button class="navbar-toggler"ｑ type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">
                    <li class="nav-item px-2">
                        <a class="nav-link" href="{{ route('subscription') }}">
                            {{ __('Subscription') }}
                        </a>
                    </li>

                    <li class="nav-item px-2">
                        <a class="nav-link" href="{{ route('checkout') }}">
                            {{ __('Checkout') }}
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-item dropdown-toggle" 
                            href="#" role="button" 
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            v-pre>
                            <i class="fas fa-user pr-2" style="color: salmon;"></i>
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
    
                        <div class="dropdown-menu dropdown-menu-right"
                            aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
    
                            <form id="logout-form"
                                action="{{ route('logout') }}"
                                method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- カードの新規登録フォーム --}}
    <div class="container">
        {!! Form::model($card, ['route' => ['cards.store', $ring->id ], 'onsubmit'=> 'return false']) !!}
        <div class="row justify-content-center">
            <div class="col-md-8 form-group">
                {!! Form::label('card_front', 'おもての内容') !!}
                {!! Form::text('card_front', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 form-group">
                {!! Form::label('card_back', 'うらの内容') !!}
                {!! Form::text('card_back', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-8 form-group">
                {!! Form::button('Create New Card', ['class' => 'btn btn-success btn-block', 'onclick' => 'submit()', 'roll' => 'button']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection