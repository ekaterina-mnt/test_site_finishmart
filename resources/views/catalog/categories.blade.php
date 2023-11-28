@extends('layout.layout')

@section('title', 'Каталог')

@section('content')
<p>Всего товаров: {{ $goods_count }}</p>
<p><a href="{{ route('get_goods') }}">Посмотреть все товары</a></p>
<div class="row row-cols-1 row-cols-md-3 g-4">
  @foreach($categories as $category => $subcategories)
  <div class="col">
    <div class="card mb-3" style="max-width: 18rem;">
      <div class="card-header">
        <h5><a href="{{ route('get_goods', $category) }}">{{ $category }}</a></h5>
        
      </div>
      <div class="card-body">
        @foreach($subcategories as $subcategory)
        <p class="card-text">{{ $subcategory->subcategory }}</p>
        @endforeach

      </div>
    </div>
  </div>
    @endforeach
  </div>

  @endsection


