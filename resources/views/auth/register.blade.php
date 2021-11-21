@extends('layouts.main')

@section('title')
    Sign up
@endsection

@section('top-assets')
    <script src="{{ asset('js/countries.js') }}" type="text/javascript"></script>
@endsection

@section('content')
    <div class="corzo-page-title-wrap corzo-style-custom corzo-left-align">
        <div class="corzo-header-transparent-substitute"></div>
        <div class="corzo-page-title-overlay"></div>
        <div class="corzo-page-title-container corzo-container">
            <div class="corzo-page-title-content corzo-item-pdlr">
                <h1 class="corzo-page-title">Sign up</h1>
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
                                            Creat your account <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
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
                                        <form method="POST" action="{{ route('register') }}"
                                              enctype="multipart/form-data">@csrf

                                            <label>Contact details</label>
                                            <input class="input @error('name') is-invalid @enderror" type="text"
                                                   name="name" value="{{ old('name') }}"
                                                   placeholder="Your Name *" required>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <input class="input @error('email') is-invalid @enderror" type="text"
                                                   name="email" value="{{ old('email') }}"
                                                   placeholder="Email Address *" required>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <input class="input @error('mobile') is-invalid @enderror"
                                                   type="tel" name="mobile" value="{{ old('mobile') }}"
                                                   placeholder="Mobile Number (Optional)">
                                            @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <label>Image</label>
                                            <input class="input @error('image') is-invalid @enderror"
                                                   type="file" name="image">
                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <label>Valid ID</label>
                                            <input class="input @error('valid_id') is-invalid @enderror"
                                                   type="file" name="valid_id">
                                            @error('valid_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <label>Password</label>
                                            <input class="input @error('password') is-invalid @enderror"
                                                   type="password" name="password" placeholder="Password"
                                                   autocomplete="new-password" required>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <input class="input" type="password" name="password_confirmation"
                                                   autocomplete="new-password" placeholder="Confirm Password" required>

                                            <label>Primary crypto wallet</label>
                                            <input class="input @error('wallet_address[0][address]') is-invalid @enderror"
                                                   type="text" name="wallet_address[0][address]"
                                                   value="{{ old('wallet_address[0][address]') }}"
                                                   placeholder="Primary Crypto Wallet Name">
                                            @error('wallet_address[0][address]')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <input class="input @error('wallet_address[0][address]') is-invalid @enderror"
                                                   type="text" name="wallet_address[0][address]"
                                                   value="{{ old('wallet_address[0][address]') }}"
                                                   placeholder="Primary Crypto Wallet Address">
                                            @error('wallet_address[0][address]')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <label>Secondary crypto wallet</label>
                                            <input class="input @error('wallet_address[1][name]') is-invalid @enderror"
                                                   type="text" name="wallet_address[1][name]"
                                                   value="{{ old('wallet_address[1][name]') }}"
                                                   placeholder="Secondary Crypto Wallet Name">
                                            @error('wallet_address[1][name]')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <input class="input @error('wallet_address[1][address]') is-invalid @enderror"
                                                   type="text" name="wallet_address[1][address]"
                                                   value="{{ old('wallet_address[1][address]') }}"
                                                   placeholder="Secondary Crypto Wallet Address">
                                            @error('wallet_address[1][address]')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <label>Country</label>
                                            <select class="input" id="country" name="country" required></select>
                                            @error('country')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <select class="input" id="state" name="state" required></select>
                                            @error('state')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <script language="javascript">
                                                populateCountries("country", "state");
                                                populateCountries("country2");
                                            </script>

                                            <label>Address</label>
                                            <input class="input @error('address') is-invalid @enderror"
                                                   type="text" name="address" placeholder="Address (Optional)"
                                                   value="{{ old('address') }}">
                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <label>Referer (Include your referer address)</label>
                                            <input class="input @error('referer') is-invalid @enderror" type="text"
                                                   name="referer" value="{{ old('referer') }}"
                                                   placeholder="Your referer (Optional)">
                                            @error('referer')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <input type="submit" name="submit" value="Sign up"
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
