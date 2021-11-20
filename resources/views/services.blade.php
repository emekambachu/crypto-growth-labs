@extends('layouts.main')

@section('title')
    Services
@endsection

@section('content')
    <div class="breadcrumb-area" style="background-image:url('{{ asset('main/img/breadcrumb/1.png') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">Services</h1>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- service-Area Start-->
    <section class="service-area pd-top-96 pd-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title section-title-2 text-center">
                        <h6 class="sub-title">Services</h6>
                        <h2 class="title">Our Trading Services</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-wrap">
                        <div class="thumb">
                            <img src="{{ asset('main/img/service/1.png') }}" alt="img">
                        </div>
                        <div class="single-service-details">
                            <h5><a href="">Cryptocurrencies</a></h5>
                            <p>Cryptocurrency is the future and with awesome rates and the best trading team, we help grow your crypto currencies with diversified portfolios across various market.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-wrap">
                        <div class="thumb">
                            <img src="{{ asset('main/img/service/2.png') }}" alt="img">
                        </div>
                        <div class="single-service-details">
                            <h5><a href="">Forex</a></h5>
                            <p>Options for investing cash including certificates of deposit and the money market funds. With CDs.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-wrap">
                        <div class="thumb">
                            <img src="{{ asset('main/img/service/3.png') }}" alt="img">
                        </div>
                        <div class="single-service-details">
                            <h5><a href="">Options Trading</a></h5>
                            <p>We offer the best Forex and Options trading services operating closely with an expert team.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-wrap">
                        <div class="thumb">
                            <img src="{{ asset('images/services/asset_management.jpg') }}" alt="img">
                        </div>
                        <div class="single-service-details">
                            <h5><a href="">Asset Management</a></h5>
                            <p>
                                With the best team of Financial and asset managers, you are assured on important projects, construction, contracts, and other assets. We invests pooled funds from clients, putting the capital to work through different investments including stocks, bonds, real estate, master limited partnerships, and more.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-wrap">
                        <div class="thumb">
                            <img src="{{ asset('images/services/commodities.jpg') }}" alt="img">
                        </div>
                        <div class="single-service-details">
                            <h5><a href="">Commodities</a></h5>
                            <p>A commodity is a basic of good used in commerce that is interchangeable with other commodities or known currencies. We offer the best the market has to offer and always put our customers first in all decisions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-wrap">
                        <div class="thumb">
                            <img src="{{ asset('images/services/funds_management.jpg') }}" alt="img">
                        </div>
                        <div class="single-service-details">
                            <h5><a href="">Funds Management</a></h5>
                            <p>Our team can be found working in fund management with mutual funds, pension funds, trust funds, and hedge funds. Our managers generally oversee mutual funds or pensions and manage their direction. study trends in the market, analyze economic data, and stay current on company news.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- service-Area End-->
@endsection
