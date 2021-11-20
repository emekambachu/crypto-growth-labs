@extends('layouts.main')

@section('title')
    Recover Password
@endsection

@section('contents')
    <div class="banner-area" id="banner-area" style="background-image:url({{ asset('header.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="banner-heading">
                        <h2 class="banner-title">Recover Password</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Recover Password</li>
                        </ol>
                    </div>
                </div>
                <!-- Col end-->
            </div>
            <!-- Row end-->
        </div>
        <!-- Container end-->
    </div>

    <section class="main-container" id="main-container">
        <!-- container end-->
        <div class="gap-60"></div>
        <div class="ts-form" id="ts-form">
            <div class="container">

                @include('includes.alerts')

                <h2 class="column-title title-small">
                    <span style="color: #0f3e68; font-weight: bold;">Recover Password</span></h2>

                <div class="row">
                    <div class="col-lg-7 col-12">

                        <form method="POST" action="{{ url('recover-password') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                                               value="{{ old('email') }}" placeholder="Email Address *" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-12" style="margin-top: 6px;">
                                    <button class="btn btn-primary tw-mt-30" type="submit">Recover Password</button>
                                </div><!-- /.col-md-6 -->

                            </div><!-- /.row -->
                        </form>
                        <!-- Form end-->
                    </div>

                    <div class="col-lg-5 col-12">
                        <img width="400" class="img-responsive" src="{{ asset('main/login.jpg') }}"/>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
