@if ($paginator->hasPages())
    <div class="pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span aria-hidden="true">ほなはじめるで&lsaquo;</span>
            </button>
        @else
            <button>
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">一つ前のん見せて&lsaquo;</a>
            </button>
        @endif

        {{-- Pagination Elements --}}
        <button>あとで SPIN つけますねん</button>
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <button>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;よっしゃ！つぎ</a>
            </button>
        @else
            <button class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span aria-hidden="true">おわりやで。ごくろうさん&rsaquo;</span>
            </button>
        @endif
    </div>
@endif

    <div>
        <a href="{{ $paginator->url(1) }}" rel="prev" aria-label="@lang('pagination.previous')">はじめのカードに戻る</a>
    </div>
    
    <div>
        <a href="{{ $paginator->url($paginator->lastPage()) }}" rel="prev" aria-label="@lang('pagination.previous')">最後のカードを表示する</a>
    </div>