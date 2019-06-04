@extends('layouts.master')

@section('content')


<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>San Fernando Valley Full Service
                            <strong>Plumbing Experts</strong></h1>
                            <p style="color:red">Call for a quote</p>
                            <p style="color:red">For an accurate price</p>
                        <p><a href="{{URL::to('/contact')}}" class="btn btn-primary btn-lg with-arrow">Shedule a visit</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="fh5co-services" class="fh5co-bg-section">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Save on your next repair</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="iphone">
                    <img class="img-responsive media-right" src="images/root.jpg" alt="deluxe rooter">
                </div>
            </div>
        <div class="col-md-12 col-sm-12">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="icon-chat"></i>
                    </span>
                    <h3>Hablamos espanol</h3>
                </div>
</div>
    </div>
</div>
</div>
            

<div id="fh5co-testimonial" class="fh5co-bg-section">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Happy Clients</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row animate-box">
                    <div class="owl-carousel owl-carousel-fullwidth">
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <span>Marcos D.</span>
                                <blockquote>
                                    <p>&ldquo;They arrived quickly &amp; and made everything so much easier to deal with. &rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <span>Jessi P.</span>
                                <blockquote>
                                    <p>&ldquo;I called David over at deluxe rooter after the first plumber we called didn't do a proper job. He pointed out all the sloppy mistakes the first guy made corrected them and fixed the original problem!&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <span>Karen S.</span>
                                <blockquote>
                                    <p>&ldquo;Deluxe Rooter is my go to plumbing service whenever there's a problem in one of my units.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop