@extends('layouts.main')

@section('title')
    Sign up
@endsection

@section('top-assets')
{{--    <!-- Latest compiled and minified CSS -->--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}

{{--    <!-- Optional theme -->--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">--}}

{{--    <!-- Latest compiled and minified JavaScript -->--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}

    <script src="{{ asset('js/countries.js') }}" type="text/javascript"></script>
@endsection

@section('content')
    <div class="breadcrumb-area" style="background-image:url('{{ asset('assets/img/breadcrumb/2.png') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">Sign up</h1>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Sign up</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-message-area bg-grey-2 pd-top-96 pd-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title text-center">
                        <h2 class="title">Sign up</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="contact-form">
                        @include('includes.alerts')
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row" style="margin-bottom: 10px;">

                                <div class="col-md-4">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Full Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                               name="name" value="{{ old('name') }}" placeholder="Your Name *" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-4">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="text"
                                               name="email" value="{{ old('email') }}"
                                               placeholder="Email Address *" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-4">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Mobile Number</label>
                                        <input class="form-control @error('mobile') is-invalid @enderror" type="tel" name="mobile"
                                               value="{{ old('mobile') }}" placeholder="Mobile Number">
                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->
                            </div>

                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-md-6">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Image</label>
                                        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image">
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Valid Government Issued ID</label>
                                        <input class="form-control @error('valid_id') is-invalid @enderror" type="file" name="valid_id">
                                        @error('valid_id')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                            </div>

                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-md-6">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" autocomplete="new-password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Confirm Password</label>
                                        <input class="form-control" type="password" name="password_confirmation"
                                               autocomplete="new-password" placeholder="Confirm Password" required>
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->
                            </div>

                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-md-6">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Bitcoin Wallet Address (Optional)</label>
                                        <input class="form-control @error('bitcoin_wallet') is-invalid @enderror" type="text"
                                               name="bitcoin_wallet" value="{{ old('bitcoin_wallet') }}">
                                        @error('bitcoin_wallet')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-6">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Ethereum Wallet Address (Optional)</label>
                                        <input class="form-control @error('ethereum_wallet') is-invalid @enderror" type="text"
                                               name="ethereum_wallet" value="{{ old('ethereum_wallet') }}">
                                        @error('ethereum_wallet')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-12 -->
                            </div>

                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-md-4">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Country</label>
                                        <input class="form-control @error('country') is-invalid @enderror" type="text"
                                               name="country" value="{{ old('country') }}"
                                               placeholder="Your Country *" required>
                                        @error('country')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-4">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Country</label>
                                        <input class="form-control @error('state') is-invalid @enderror" type="text"
                                               name="state" value="{{ old('state') }}"
                                               placeholder="Your State *" required>
                                        @error('state')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <script language="javascript">
                                    populateCountries("country", "state");
                                    populateCountries("country2");
                                </script>

                                <div class="col-md-4">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Address</label>
                                        <input class="form-control @error('address') is-invalid @enderror" type="text"
                                               name="address" placeholder="Address" value="{{ old('address') }}">
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-12">
                                    <div class="submit-area text-center">
                                        <button type="submit" class="btn btn-pink">
                                            SUBMIT <i class="la la-arrow-right"></i></button>
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
