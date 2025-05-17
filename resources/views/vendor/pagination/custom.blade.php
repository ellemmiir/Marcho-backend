@if ($paginator->hasPages())
    <div class="pagination">
        <!--Кнопка назад -->
        @if ($paginator->onFirstPage())
            <span class="pagination__prev  disabled">PREVIOUS</span>
        @else
            <a class="pagination__prev pagination__arrows" href="{{ $paginator->previousPageUrl() }}">PREVIOUS</a>
        @endif
        <!--Странички -->
        <ul class="pagination__list">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="pagination__item"><span class="pagination__link">…</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <li class="pagination__item">
                            @if ($page == $paginator->currentPage())
                                <span class="pagination__link pagination__link--active">{{ $page }}</span>
                            @else
                                <a class="pagination__link" href="{{ $url }}">{{ $page }}</a>
                            @endif
                        </li>
                    @endforeach
                @endif
            @endforeach
        </ul>
        <!--Кнопка Вперед -->
        @if ($paginator->hasMorePages())
            <a class="pagination__next pagination__arrows" href="{{ $paginator->nextPageUrl() }}">NEXT</a>
        @else
            <span class="pagination__next disabled">NEXT</span>
        @endif
    </div>
@endif
