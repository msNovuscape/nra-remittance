@extends('frontend.master')

@section('content')
    <section class="innerpage section-padding-50 contact-page">
        <div class="container">
            <div class="grid grid-cols-2 grid-gap-30">
                <article>
                    <div class="section-header">
                        <span class="bg-third dash-line"></span> <span class="sub-page text-uppercase">Contact Details</span>
                        <h1>Contact Us</h1>
                        <p>Give us a call or drop by anytime, we endeavour to answer all enquires within 24 hours on business days. We will be happy to answer your questions.</p>
                        <div class="info-box flex flex-wrap flex-row flex-items-center">
                            <i class="fa fa-globe"></i>
                            <div>
                                <h4>Our Address</h4>
                                <p> Kamalpokhari, Kathmandu, Nepal</p>
                            </div>
                        </div>
                        <div class="info-box flex flex-wrap flex-row flex-items-center">
                            <i class="fa fa-envelope"></i>
                            <div>
                                <h4>Our Mailbox</h4>
                                <p> contact@nra.org.np</p>
                            </div>
                        </div>
                        <div class="info-box flex flex-wrap flex-row flex-items-center">
                            <i class="fa fa-envelope"></i>
                            <div>
                                <h4>Our Phone</h4>
                                <p>+977-1-4433166</p>
                            </div>
                        </div>
                    </div>
                </article>
                <div class="form-wrapper">
                    <h2>Ready to Get Started?</h2>
                    <p>Your email address will not be published. Required fields are marked *</p>
                    <form action="">
                        <div class="form-group">
                            <input type="text" placeholder="Your Name *">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Your Email *">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" rows="3" placeholder="Message..."></textarea>
                        </div>
                        <button class="btn btn-outline-third pill">Send Message <i class="fa fa-long-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection