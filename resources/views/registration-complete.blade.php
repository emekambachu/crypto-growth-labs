@extends('layouts.main')

@section('title')
    Registration Complete
@endsection

@section('content')
    <div class="corzo-page-title-wrap corzo-style-custom corzo-left-align">
        <div class="corzo-header-transparent-substitute"></div>
        <div class="corzo-page-title-overlay"></div>
        <div class="corzo-page-title-container corzo-container">
            <div class="corzo-page-title-content corzo-item-pdlr">
                <h1 class="corzo-page-title">Registration Complete</h1>
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
                                <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb">
                                    <div role="form" class="wpcf7" id="wpcf7-f1979-p1964-o1" dir="ltr" lang="en-US">
                                        <p class="">Hello <strong>{{ Session::get('name') }}</strong><br><br>
                                            Thanks for taking your time to register on our Crypto growth labs.<br>
                                            Your account will be verified and activated by our security team in a moment, you can choose any of our mining packages so we can commence mining on your account immediately.<br><br>
                                            <a href="{{ route('login') }}">
                                                <strong>Login</strong>
                                            </a> to start investing
                                        </p>
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
