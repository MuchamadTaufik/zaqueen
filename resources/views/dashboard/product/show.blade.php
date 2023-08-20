@extends('dashboard.layouts.main')

@section('container')

<div class="container mt-3">
    <div class="card-group">
        <div class="card">
            @if ($product->image1)
                <img src="{{ asset('storage/' . $product->image1) }}" class="card-img-top" alt="{{ $product->category->name }}">
            @endif
        </div>
        <div class="card">
            @if ($product->image2)
                <img src="{{ asset('storage/' . $product->image2) }}" class="card-img-top" alt="{{ $product->category->name }}">
            @endif
        </div>
        <div class="card">
            @if ($product->image3)
                <img src="{{ asset('storage/' . $product->image3) }}" class="card-img-top" alt="{{ $product->category->name }}">
            @endif
        </div>
    </div>

    <ul class="list-group list-group-flush">
        <li class="list-group-item" style="font-weight: bold;">{{ $product->name }}</li>
        <li class="list-group-item" style="font-weight: bold; color: red;">Rp. {!! $product->price !!}</li>
        <li class="list-group-item" style="font-weight: bold;">{!! $product->material !!}</li>
        <li class="list-group-item" style="font-weight: bold;">{!! $product->size !!}</li>
        <li class="list-group-item"> {!! $product->description !!}</li>
    </ul>
    <a href="/dashboard/product" class="btn btn-dark mt-3 mb-3"><i class="bi bi-arrow-left-circle"></i></a>
    
</div>

@endsection