@extends('layout.layout')

@section('title', 'Каталог')

@section('content')
<div class="row catalog">
    @foreach($categories as $category)
    <p>{{ $category->category }}</p>
    @endforeach
</div>
@endsection