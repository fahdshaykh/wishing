@if ($paginator->hasPages()) 
<div class="row tm-row tm-mt-100 tm-mb-75">
    <div class="tm-prev-next-wrapper">
        @if ($paginator->onFirstPage())
            <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
        @else 
            <a href="{{ $paginator->previousPageUrl() }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20">Prev</a>
        @endif 
        @if ($paginator->hasMorePages()) 
            <a href="{{ $paginator->nextPageUrl() }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
        @else
            <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
        @endif
    </div>
    <div class="tm-paging-wrapper">
        <span class="d-inline-block mr-3">Page</span>
        <nav class="tm-paging-nav d-inline-block">
            <ul>
                @foreach ($elements as $element)
                @if (is_string($element)) 
                <li class="tm-paging-item active">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                </li>
                @endif
                
                @if (is_array($element)) 
                @foreach ($element as $page => $url) 
                @if ($page == $paginator->currentPage()) 

                <li class="tm-paging-item active">
                    <a class="mb-2 tm-btn tm-paging-link"> {{ $page }} </a>
                </li>

                @else 

                <li class="tm-paging-item">
                    <a href="{{ $url }}" class="mb-2 tm-btn tm-paging-link"> {{ $page }} </a>
                </li>

                @endif 
                @endforeach 
                @endif 

                @endforeach 
            </ul>
        </nav>
    </div>                
</div>
@endif 