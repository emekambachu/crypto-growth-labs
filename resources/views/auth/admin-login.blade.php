@extends('layouts.main')

@section('title')
    Admin Login
@endsection

@section('top-assets')
    <script src="{{ asset('js/countries.js') }}" type="text/javascript"></script>
@endsection

@section('content')
    <div class="breadcrumb-area" style="background-image:url('{{ asset('assets/img/breadcrumb/2.png') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">Admin Login</h1>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Admin Login</li>
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
                        <h2 class="title">Admin Login</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="contact-form">
                        @include('includes.alerts')
                        <form method="POST" action="{{ route('admin-login') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row" style="margin-bottom: 10px;">

                                <div class="col-md-6">
                                    <div class="single-input-wrap style-2 input-group">
                                        <label>Username</label>
                                        <input class="form-control @error('username') is-invalid @enderror" type="text"
                                               name="username" value="{{ old('username') }}"
                                               placeholder="Username *" required>
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

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

                                <div class="col-md-12">
                                    <div class="submit-area text-center">
                                        <button type="submit" class="btn btn-pink">
                                            LOGIN <i class="la la-arrow-right"></i></button>
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
