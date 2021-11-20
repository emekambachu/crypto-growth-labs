@extends('layouts.main')

@section('title')
    Investment Plans
@endsection

@section('contents')
    <div class="banner-area" id="banner-area" style="background-image:url({{ asset('header.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="banner-heading">
                        <h1 class="banner-title">Investment Plans</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Investment Plans</li>
                        </ol>
                    </div>
                </div>
                <!-- Col end-->
            </div>
            <!-- Row end-->
        </div>
        <!-- Container end-->
    </div>

    <section class="main-container" id="main-container" style="padding-top: 5px;">
        <div class="ts-price-box">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h2 class="section-title"><span>Our</span>Investment Plans</h2>
                    </div>
                    <!-- Col End -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pricing-boxed">

                            @foreach($packages as $package)
                                <div class="single-price-box">
                                    <div class="pricing-plan" style="background-color: #ebf1ff; margin-bottom: 5px;">
                                        <div class="pricing-header border-left" style="background-color: #2154CF;">
                                            <h2 class="plan-name">{{ $package->name }}</h2>
                                            <h3 class="plan-price">
                                                @if(!empty($package->min))
                                                    <p style="font-size: 18px;">Minimum: {{ '$'.number_format($package->min) }}</p>
                                                @endif

                                                @if(!empty($package->max))
                                                    <p style="font-size: 18px;">Maximum: {{ '$'.number_format($package->max) }}</p>
                                                @else
                                                    <p style="font-size: 18px;">and above</p>
                                                @endif
                                            </h3>
                                        </div>
                                        <ul class="list-unstyled">

                                            @if(!empty($package->roi))
                                                <li style="font-size: 18px;">{{ $package->roi }}
                                                    <i class="fa fa-check"></i></li>
                                            @endif

                                            @if(!empty($package->option1))
                                                <li style="font-size: 18px;">{{ $package->option1 }}
                                                    <i class="fa fa-check"></i></li>
                                            @endif

                                            @if(!empty($package->option2))
                                                <li style="font-size: 18px;">{{ $package->option2 }}
                                                    <i class="fa fa-check"></i></li>
                                            @endif

                                            @if(!empty($package->option3))
                                                <li style="font-size: 18px;">{{ $package->option3 }}
                                                    <i class="fa fa-check"></i></li>
                                            @endif

                                            @if(!empty($package->referral_bonus))
                                                <li style="font-size: 18px;">{{ $package->referral_bonus }}% Referral Bonus</li>
                                            @endif

                                            @if(!empty($package->expert_advice))
                                                <li style="font-size: 18px;">{{ $package->expert_advice }}</li>
                                            @endif
                                        </ul>
                                        <div>
                                            <a target="_self" href="{{ route('register') }}" class="btn btn-primary">Sign up</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
