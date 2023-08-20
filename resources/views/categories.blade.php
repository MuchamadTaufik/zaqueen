@extends('layouts.main')

@section('container')
    
<!-- ***** Main Banner Area Start ***** -->
        <div class="main-banner" id="top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="right-content">
                            <div class="row">
                                @foreach ($categories as $category)
                                <div class="col-lg-3">
                                    <div class="right-first-image">
                                        <div class="thumb">
                                            <div class="inner-content">
                                                <h4>{{ $category->name }}</h4>
                                            </div>
                                            <div class="hover-content">
                                                <div class="inner">
                                                    <h4>{{ $category->name }}</h4>
                                                    <div class="main-border-button">
                                                        <a href="/?category={{ $category->slug }}#product">Discover More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="https://source.unsplash.com/300x360/?{{ $category->slug }}" class="card-img-top" alt="{{ $category->name }}">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Main Banner Area End ***** -->
    @endsection