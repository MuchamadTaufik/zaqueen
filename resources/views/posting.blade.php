@extends('layouts.mainPosting')

@section('container')

<div class="card-group">
    <div class="card-group">
        <div class="card">
            @if ($posting->image1)
                <img src="{{ asset('storage/' . $posting->image1) }}" class="card-img-top" alt="{{ $posting->category->name }}">
            @endif
        </div>
        <div class="card">
            @if ($posting->image2)
                <img src="{{ asset('storage/' . $posting->image2) }}" class="card-img-top" alt="{{ $posting->category->name }}">
            @endif
        </div>
        <div class="card">
            @if ($posting->image3)
                <img src="{{ asset('storage/' . $posting->image3) }}" class="card-img-top" alt="{{ $posting->category->name }}">
            @endif
        </div>
    </div>
</div>

<div class="container mt-3">
<div class="row">
    <div class="col-lg-4">
        <div class="card mb-3">
            <ul class="list-group list-group-flush">
                <li class="list-group-item" style="font-weight: bold;">{{ $posting->name }}</li>
                <li class="list-group-item" style="font-weight: bold; color: red;">Rp. {!! $posting->price !!}</li>
                <li class="list-group-item" style="font-weight: bold;">{!! $posting->material !!}</li>
                <li class="list-group-item" style="font-weight: bold;">{!! $posting->size !!}</li>
            </ul>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item" style="font-weight: bold;">Description</li>
                <li class="list-group-item"> {!! $posting->description !!}</li>
            </ul>
        </div>
    </div>
</div>
    <a href="https://api.whatsapp.com/send?phone=6285520789798&text=Hallo%20min%20berikut%20pesanan%20saya%20%0ANama%20Produk%20:%20{{ $posting->name }}%20%0AUkuran%20:%20{{ $posting->size }}%20%0AHarga%20:%20{{ $posting->price }}" class="btn btn-primary mt-3 mb-3">Buy</a>
    <a href="/#product" class="btn btn-primary mt-3 mb-3">back to product</a>
</div>

@endsection

