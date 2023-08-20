@extends('layouts.main')

@section('container')
    <!-- ***** Contact Area Starts ***** -->
    <div class="contact-us" style="margin-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2673.8789962263686!2d108.21960847277371!3d-7.384943072691039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f57ec3012e283%3A0x88f12a3b98e7c7a4!2sPerumahan%20Bumi%20Mutiara%20Mandiri!5e1!3m2!1sen!2sth!4v1692415376459!5m2!1sen!2sth" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <!-- You can simply copy and paste "Embed a map" code from Google Maps for any location. -->
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Give Your Feedback !</h2>
                        <span>This form will be sent via admin zaqueen.</span>
                    </div>
                    <form id="contact" action="" method="get">
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                <input name="email" type="text" id="email" placeholder="Your email" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Your message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area Ends ***** -->
@endsection