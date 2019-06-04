@extends('layouts.master')

@section('content')
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Schedule a visit</h1>
                        <p>Fill out our form &amp; we'll be in touch shortly.</p>
                        <p>If you need immediate assistance <a href="tel:18188900606">Call Us</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="fh5co-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-push-1 animate-box">

                <div class="fh5co-contact-info">
                    <h3>Contact Information</h3>
                    <ul>
                        <li class="phone"><a href="tel://18188900606">+1 818-890-0606</a></li>
                        <li class="email"><a href="mailto:info@deluxerooter.com">info@deluxerooter.com</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-6 animate-box">
                <h3>Schedule a visit</h3>
                <form method="post" name="myemailform" action="/form-to-email.php">
                        <div class="row form-group">
                        <div class="col-md-6">
                            <!-- <label for="fname">First Name</label> -->
                            <input type="text" id="name" class="form-control" placeholder="Your firstname">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="email">Email</label> -->
                            <input type="text" id="email" class="form-control" placeholder="Your phone number">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="message">Message</label> -->
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Tell us about the issue your having"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>

                </form>	
            
            </div>
        </div>

    </div>
</div>

@stop