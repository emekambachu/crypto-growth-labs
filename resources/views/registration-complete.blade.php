@extends('layouts.main')

@section('title')
    Registration Complete
@endsection

@section('top-assets')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <script src="{{ asset('js/countries.js') }}" type="text/javascript"></script>
@endsection

@section('content')
    <div class="uk-section uk-padding-remove-vertical in-liquid-breadcrumb">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span>Registration Complete</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="column-title title-small">
            <span style="color: #0f3e68; font-weight: bold;">Registration Complete</span></h2>

        <div class="row">
            <div class="col-lg-7 col-12">
                <p class="heading--desc">Hello <strong>{{ Session::get('name') }}</strong><br><br>
                    Thanks for taking your time to register on our crypto investment platform. Your account will be verified and activated by our security team in a moment, you can choose any of our mining packages so we can commence mining on your account immediately.<br><br>
                    <a href="{{ route('login') }}">
                        <strong>Login</strong>
                    </a> to start investing
                </p>
            </div>

            <div class="col-lg-5 col-12">
                <img width="400" class="img-responsive"
                     src="{{ asset('main/img/in-signin-image.jpg') }}"/>
            </div>

        </div>
    </div>
@endsection
