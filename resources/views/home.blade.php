@extends('layouts.main')

@section('container')
    
<div class="main-banner" id="top" style="margin-top: -70px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <div class="thumb">
                        <div class="inner-content">
                            <h4>Zaqueen Collection</h4>
                            <span>Available all clothes &amp; other necessities</span>
                            <div class="main-border-button">
                                <a href="https://api.whatsapp.com/send?phone=6285520789798&text=Hallo%20min%20berikut%20pesanan%20saya%20%0ANama%20Produk%20:%20%0AUkuran%20:%20%0AJumlah%20Barang%20:%20%0AAlamat%20:">Purchase Now!</a>
                            </div>
                        </div>
                        <img src="images/model1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <div class="inner">
                                            <div class="main-border-button">
                                                <li class="scroll-to-section"><a href="#product">Discover More</a></li>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="images/model2.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <div class="main-border-button">
                                                <li class="scroll-to-section"><a href="#product">Discover More</a></li>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="images/model3.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <div class="main-border-button">
                                                <li class="scroll-to-section"><a href="#product">Discover More</a></li>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="images/model4.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <div class="main-border-button">
                                                <li class="scroll-to-section"><a href="#product">Discover More</a></li>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="images/model5.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" id="product" style="margin-top: 20px">
    <div class="col-md-4 offset-md-8">
        <form action="/#product">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request ('category') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request ('search') }}">
                <button class="btn btn-dark" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if($home->count())
<div class="container">
    <div class="row">
        @foreach ($home as $posting)
        <div class="col-md-3 mb-3">
            <div class="card">
                <div style="height: 300px; overflow:hidden;">
                @if ($posting->image1)
                    <img src="{{ asset('storage/' . $posting->image1) }}" class="card-img-top" alt="{{ $posting->category->name }}">
                @endif
                </div>
                <div class="card-body text-center">
                    <h6 class="card-title mb-0">{{ $posting->name }}</h6>
                    <p class="card-text text-danger mb-1">Rp. {{ $posting->price }}</p>
                    <a href="/posting/{{ $posting->slug }}" class="btn btn-dark"><i class="fa fa-eye"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=6285520789798&text=Hallo%20min%20berikut%20pesanan%20saya%20%0ANama%20Produk%20:%20{{ $posting->name }}%20%0AUkuran%20:%20{{ $posting->size }}%20%0AHarga%20:%20{{ $posting->price }}" class="btn btn-dark"><i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
    <p class="text-center fs-4">SOON!!!</p>    
@endif

<div class="d-flex justify-content-end">
    {{ $home->links() }}
</div>

    <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>Explore Our Products</h2>
                        <span>Friends, let's start our adventure at the Zaqueen store, a place where the magic of fashion and style meets around every corner. With a wide range of quality products and endless choices, we are ready to explore this wonderful world and find hidden gems in Zaqueen!</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>Finding Your Style, Carving a Fashion Story.</p>
                        </div>
                        <p>Not only are the products amazing, but the shopping experience at Zaqueen is something extraordinary. With friendly staff and in-depth knowledge of fashion, you'll feel like you're on a journey with friends who share the same interests.</p>
                        <p>we have social media that you must follow, come visit <a rel="nofollow" href="https://www.instagram.com/zaqueen_collection/" target="_blank">Zaqueen</a> to add to your shopping experience, you are well served here.</p>
                        <div class="main-border-button">
                            <a href="/contact">Contact Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="leather">
                                    <h4>Muslim Clothes</h4>
                                    <span>there are many muslim clothes</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="first-image">
                                    <img src="images/model6.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="second-image">
                                    <img src="images/model7.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="types">
                                    <h4>Traditional</h4>
                                    <span>many variants of traditional clothing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Starts ***** -->
    <section class="section" id="social">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Social Media</h2>
                        <span>Visit Zaqueen's social media for more details</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row images">
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="https://www.instagram.com/zaqueen_collection/">
                                <h6>Fashion</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="images/instagram-01.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="https://www.instagram.com/zaqueen_collection/">
                                <h6>New</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="images/instagram-02.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="https://www.instagram.com/zaqueen_collection/">
                                <h6>Brand</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="images/instagram-03.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="https://www.instagram.com/zaqueen_collection/">
                                <h6>Makeup</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="images/instagram-04.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="https://www.instagram.com/zaqueen_collection/">
                                <h6>Leather</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="images/instagram-05.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="https://www.instagram.com/zaqueen_collection/">
                                <h6>Bag</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="images/instagram-06.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe" id="feedback">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>Give your feedback on our services and our products</h2>
                        <span>Thank you for visiting and the opinion you gave us.</span>
                    </div>
                    <form action="" method="get">
                        <div class="row">
                            <div class="col-lg-5">
                                <fieldset>
                                <input name="feedback" type="text" id="feedback" placeholder="Feedback" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-5">
                                <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset>
                                <button name="submit" type="submit" id="submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Store Location:<br><span>Perum Bumi Mutiara Mandiri, Blok E No.61</span></li>
                                <li>Phone:<br><span>085520789798</span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Email:<br><span>zaqueencollection23@gmail.com</span></li>
                                <li>Social Media:<br><span><a href="#">Facebook</a>, <a href="https://www.instagram.com/zaqueen_collection/">Instagram</a>, <a href="#">Shopee</a>, <a href="https://api.whatsapp.com/send?phone=6285520789798&text=Hallo%20min%20berikut%20pesanan%20saya%20%0ANama%20Produk%20:%20%0AUkuran%20:%20%0AJumlah%20Barang%20:%20%0AAlamat%20:">Whatsapp</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->
@endsection