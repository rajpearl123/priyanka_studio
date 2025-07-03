<ul class="pagination">
    @if ($paginator->onFirstPage())
        <li><a class="disabled page-number previous" href="#"><i class="bi bi-chevron-left"></i></a></li>
    @else
        <li><a class="page-number previous" href="{{ $paginator->previousPageUrl() }}"><i class="bi bi-chevron-left"></i></a></li>
    @endif

    @foreach ($elements as $element)
        @if (is_string($element))
            <li>{{ $element }}</li>
        @endif
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li><span class="page-number current">{{ $page }}</span></li>
                @else
                    <li><a class="page-number" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <li><a class="page-number next" href="{{ $paginator->nextPageUrl() }}"><i class="bi bi-chevron-right"></i></a></li>
    @else
        <li><a class="disabled page-number next" href="#"><i class="bi bi-chevron-right"></i></a></li>
    @endif
</ul>