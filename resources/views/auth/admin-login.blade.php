@extends('layouts.main')

@section('title')
    Admin Login
@endsection

@section('content')
    <div class="corzo-page-title-wrap corzo-style-custom corzo-left-align">
        <div class="corzo-header-transparent-substitute"></div>
        <div class="corzo-page-title-overlay"></div>
        <div class="corzo-page-title-container corzo-container">
            <div class="corzo-page-title-content corzo-item-pdlr">
                <h1 class="corzo-page-title">Admin Login</h1>
                <div class="corzo-page-caption-divider"></div>
            </div>
        </div>
    </div>

    <div class="gdlr-core-pbf-wrapper" style="padding: 10px 0px 35px 0px;">
        <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffffff;"></div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" style="max-width: 760px;">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px;">
                                    <div class="gdlr-core-title-item-title-wrap">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                            style="font-size: 39px; font-weight: 600; letter-spacing: 0px; text-transform: none;">
                                            Login as an admin <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                        </h3>
                                    </div>

                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb">
                                    <div role="form" class="wpcf7" id="wpcf7-f1979-p1964-o1" dir="ltr" lang="en-US">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        @include('includes.alerts')
                                    <form method="POST" action="{{ route('admin-login') }}" enctype="multipart/form-data">
                                        @csrf
                                            <input type="text" name="username" id="Email"
                                                   placeholder="Username:"
                                                   class="input @error('username') is-invalid @enderror">
                                            @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <input type="password" name="password" id="Name"
                                                   placeholder="Password:"
                                                   class="input @error('password') is-invalid @enderror">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <input type="submit" name="submit" value="Login"
                                                   class="submit-button">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
