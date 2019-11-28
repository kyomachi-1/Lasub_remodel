@if ($paginator->hasPages())
    <div class="row row-button-container justify-content-center pagination" role="navigation">

    {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="col" disabled>BACK</button>
        @else
            <button class="col" onclick="location.href='{{ $paginator->previousPageUrl() }}'" rel="prev">BACK</button>
        @endif

        {{-- Pagination Elements --}}
            <button class="col button"><i class="fa fa-refresh"></i></button>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <button class="col" onclick="location.href='{{ $paginator->nextPageUrl() }}'" rel="next">NEXT</button>
        @else
            <button class="col" disabled>NEXT</button>
        @endif
    </div>
    <div class="row row-button-container justify-content-between pagination pt-3" role="navigation">
        <div class="col">
        <a href="{{ $paginator->url(1) }}" style="color: LightSeaGreen;"><i class="pr-3 fa fa-caret-left"></i>FirstCard</a>
        </div>
                <div class="col">
                <a class="d-block" href="{{ route('cards.index', ['id' => $card->ring_id]) }}" style="width: 100px;color: LightSeaGreen; position: absolute; bottom: 0; left: 50%; margin-left: -50px; text-align:center;">Card Index</a>
    </div>
        <div class="col">
        <a class="float-right" style="color: LightSeaGreen;" href="{{ $paginator->url($paginator->lastPage()) }}">LastCard<i class="pl-3 fa fa-caret-right"></i></a>
    
            </div>
    </div>
@else
    <div class="row row-button-container justify-content-center pagination" role="navigation">

    {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="col" disabled>BACK</button>
        @else
            <button class="col" onclick="location.href='{{ $paginator->previousPageUrl() }}'" rel="prev">BACK</button>
        @endif

        {{-- Pagination Elements --}}
            <button class="col button"><i class="fa fa-refresh"></i></button>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <button class="col" onclick="location.href='{{ $paginator->nextPageUrl() }}'" rel="next">NEXT</button>
        @else
            <button class="col" disabled>NEXT</button>
        @endif
    </div>
    <div class="row row-button-container justify-content-between pagination pt-3" role="navigation">
        <div class="col">
        <a href="{{ $paginator->url(1) }}" style="color: LightSeaGreen;"><i class="pr-3 fa fa-caret-left"></i>FirstCard</a>
        </div>
                <div class="col">
                <a class="d-block" href="{{ route('cards.index', ['id' => $card->ring_id]) }}" style="width: 100px;color: LightSeaGreen; position: absolute; bottom: 0; left: 50%; margin-left: -50px; text-align:center;">Card Index</a>
    </div>
        <div class="col">
        <a class="float-right" style="color: LightSeaGreen;" href="{{ $paginator->url($paginator->lastPage()) }}">LastCard<i class="pl-3 fa fa-caret-right"></i></a>
    
            </div>
    </div>
@endif