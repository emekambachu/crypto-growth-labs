@extends('layouts.main')

@section('title')
    Contact us
@endsection

@section('content')
    <div class="breadcrumb-area" style="background-image:url('{{ asset('assets/img/breadcrumb/2.png') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">Contact</h1>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-area pd-top-100 pd-bottom-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-wrap">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/contact/2.png') }}" alt="img">
                            <span><a href="#">OUR OFFICE</a></span>
                        </div>
                        <div class="single-service-details">
                            <h5><a href="#">Head Office</a></h5>
                            <p>Justo! 6575 HGF Road New York USA. <br> ER- 467 Nuoe Toun Melbourne, Australia</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-wrap">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/contact/1.png') }}" alt="img">
                            <span><a href="#">OUR LOCATION</a></span>
                        </div>
                        <div class="single-service-details">
                            <h5><a href="#">Location - Mail</a></h5>
                            <p>Justo! Anim consequatur tempor ut commn Mail: consultint@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-wrap">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/contact/3.png') }}" alt="img">
                            <span><a href="#">CALL US DIRECT</a></span>
                        </div>
                        <div class="single-service-details">
                            <h5><a href="#">Call Us </a></h5>
                            <p>Phone: +1(631)343-5226</p>
                            <p>Email: info@bullsmarkettraders.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-message-area bg-grey-2 pd-top-96 pd-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title text-center">
                        <h2 class="title">Send Message</h2>
                        <p>Curabitur malesuada? Tempore odit euismod. Officia, nec platea excepteur, praesent? Adipisicing aspernatur vel lacinia, veniam mi! Iaculis debitis totam neque? Et placerat dis per blanditiis atque, lacus</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="single-input-wrap style-2 input-group">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="single-input-wrap style-2 input-group">
                                        <input type="text" class="form-control" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="single-input-wrap style-2 input-group">
                                        <input type="text" class="form-control" placeholder="Your Website">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="single-input-wrap style-2 input-group">
                                        <input type="text" class="form-control" placeholder="Your Number">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single-input-wrap style-2 input-group mb-0">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><img src="{{ asset('assets/img/contact/icon.png') }}" alt="img"></div>
                                        </div>
                                        <textarea class="form-control" rows="4" name="note" placeholder="Type Your Message..."></textarea>
                                    </div>
                                    <div class="submit-area text-center">
                                        <button type="submit" class="btn btn-pink">SEND MESSAGE <i class="la la-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
