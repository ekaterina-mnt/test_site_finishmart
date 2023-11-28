@extends('layout.layout')

@section('title', 'Поиск')

@section('content')

@if ($goods->isEmpty())

<p>Товаров по запросу "{{ $fragment }}" не найдено.</p>

@else
<p>По запросу "{{ $fragment }}" найдено товаров:</p>
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($goods as $num => $good)
    <div class="col">
        <div class="card">
            <img src="{{ $good->images[$good->id][0]['img1'] }}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{ $good->title }}</h5>
                <p class="card-text">Цена: {{ $good->price }}</p>
                <p class="card-text">Категория: {{ $good->category }}</p>
                <p class="card-text">Подкатегория: {{ $good->subcategory }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="course-paginator">

    <p>Всего найдено: {{ $goods->total() }}</p>

    @if ($goods->hasPages())
    <nav aria-label="...">
        <ul class="pagination">
            <li @if ($goods->currentPage() == 1) class = "page-item disabled" @else class="page-item" @endif>
                <a class="page-link" href="{{ $goods->previousPageUrl() }}&fragment={{ $fragment }}">Предыдущая</a>
            </li>
            <li @if (1==$goods->currentPage()) class="page-item active" @else class="page-item" @endif>
                <a class="page-link" href="{{ $goods->url(1) }}&fragment={{ $fragment }}">1</a>
            </li>
            <li @if (2==$goods->currentPage()) class="page-item active" @else class="page-item" @endif>
                <a class="page-link" href="{{ $goods->url(2) }}&fragment={{ $fragment }}">2</a>
            </li>
                    @if ($goods->currentPage() > 5 )
                    <li class="page-item">
                        <div class="page-link">...</div>
                    </li>
                    @endif
            @for ($i=$goods->currentPage()-2 < 1 ? 1 : $goods->currentPage()-2; $i< ($goods->currentPage()+3 > $goods->lastPage() ? $goods->lastPage() : $goods->currentPage()+3) ; $i++)
                    @if ($i == 1 or $i == 2) 
                    @continue
                    @endif
            <li @if ($i==$goods->currentPage()) class="page-item active" @else class="page-item" @endif>
                        <a class="page-link" href="{{ $goods->url($i) }}&fragment={{ $fragment }}">{{ $i }}</a>
                    </li>
                    @endfor
                    @if ($goods->lastPage() - $goods->currentPage() > 2)
                    <li class="page-item">
                        <div class="page-link">...</div>
                    </li>
                    @endif
                    <li @if ($i==$goods->currentPage()) class="page-item active" @else class="page-item" @endif><a class="page-link" href="{{ $goods->url($goods->lastPage()) }}&fragment={{ $fragment }}">{{ $goods->lastPage() }}</a></li>

                    <li @if ($goods->currentPage() == $goods->lastPage()) class = "page-item disabled" @else class="page-item" @endif>
                        <a class="page-link" href="{{ $goods->nextPageUrl() }}&fragment={{ $fragment }}">Следующая</a>
                    </li>
        </ul>
    </nav>
    <!-- <div class="d-flex justify-content-center">
        {{ $goods->links() }} -->
    <!-- @for ($i=1; $i<=$goods->lastPage(); $i++)
        <a href="{{ $goods->url($i) }}" @if ($i==$goods->currentPage()) class="current" @endif>{{ $i }}</a>
    @endfor -->
    <!-- </div> -->
    @endif
</div>

@endif
@endsection