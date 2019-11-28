@extends('layouts.app')

@section('content')

        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('rings.index') }}">
                    <i class="fas fa-angle-left pr-2" style="color: #32a4a8"></i>
                    {{ $ring->ring_name }}
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
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

    <!-- table でカード一覧 -->
    @if(count($cards) > 0)
    <div class="container">
        <table class="table table-hover px-1" style="table-layout: fixed">
        <tbody  class="mx-2">
            @foreach ($cards as $card)
            <tr>
                <td class="align-middle px-0">
                    <div class="rounded ml-2 px-2 py-2" style="background-color: #E4DFC1; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{!! $card->card_front !!}</div>
                </td>
                <td class="align-middle px-0">
                    <div class="rounded mx-2 px-2 py-2" style="background-color: #E4DFC1; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{!! $card->card_back !!}</div>
                </td>
                <td class="align-middle px-0" style="width: 68px">
                    <button type="button" class="btn px-0" style="font-size: 12px; width: 60px; height: 42px; background-color: #E4DFC1;" data-toggle="modal" data-target="#limit-ring-create">表示</button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endif

    <!--div でカード一覧 -->

    @if(count($cards) > 0)
        @foreach ($cards as $card)
        <div class="container">
            <div class="hover row position-relative justify-content-around border-bottom py-3">
                <div class="col position-static border border-info rounded text-truncate ml-2 mr-2 p-2"><a class="stretched-link text-decoration-none text-reset" href="{{ route('cards.edit', ['ringId' => $card->ring_id, 'cardId' => $card->id]) }}">{!! $card->card_front !!}</a></div>
                <div class="col position-static border border-info rounded text-truncate mr-2 p-2"><a class="stretched-link text-decoration-none text-reset" href="{{ route('cards.edit', ['ringId' => $card->ring_id, 'cardId' => $card->id]) }}">{!! $card->card_back !!}</a></div>
                <button type="button" class="btn py-2 px-2 mr-2" style="font-size: 12px; width: 60px; height: 42px; background-color: #E4DFC1;">表示</button>
            </div>
        </div>
        @endforeach
    @else
        <div class="container p-5">カードを作成しましょう</div>
    @endif

    <nav class="navbar navbar-expand-lg fixed-bottom shadow-smpx-0 py-0" style="background: #32a4a8;;">
        <div class="container">
            <div class="px-3 py-0">
                <a class="nav-item nav-link px-3"
                style="color: black; text-decoration: none;"
                href="{{ route('cards.study', ['id' => $ring->id]) }}">
                    <i class="fas fa-play fa-lg" style="color: grey;"></i>
                </a>
            </div>
            <div class="fixed-bottom mx-auto text-center align-middle circle rounded-circle" style="background: #32a4a8; width: 70px; height: 70px;display:inline-block; ">
                <a class="nav-item nav-link px-3 py-0"
                href="{{ route('cards.create', ['id' => $ring->id]) }}">
                <i class="fas fa-plus fa-3x" style="color: grey; line-height: 70px"></i>
                </a>
            </div>
            <div class="px-3 py-0">
                <a class="nav-item nav-link px-3"
                style="color: black; text-decoration: none;"
                href="{{ route('rings.index') }}">
                    <i class="fas fa-cog fa-lg" style="color: grey;"></i>
                </a>
            </div>
        </div>
    </nav>

@endsection