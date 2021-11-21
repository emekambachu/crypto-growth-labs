@extends('layouts.users')

@section('title')
    Account Settings
@endsection

@section('contents')
    <div class="layout-px-spacing">
        <div class="page-header">
            <div class="page-title">
                <h3 class="text-dark">Account Settings</h3>
            </div>

        </div>

        <div class="row layout-top-spacing">

            <div id="flStackForm" class="col-lg-12 col-md-12 col-12 layout-spacing layout-top-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Withdraw Amount</h4>
                            </div>
                            <p>Payment will be made to your Bitcoin Wallet Address</p>
                            @include('includes.alerts')
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form method="post" action="{{ url('users/update-account') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Full Name</label>
                                    <input name="name" type="text" class="form-control"
                                           value="{{ $user->name }}" id="validationDefault01" required="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Email</label>
                                    <input name="email" type="email" class="form-control"
                                           value="{{ $user->email }}" id="validationDefault01" required="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Mobile Number</label>
                                    <input name="mobile" type="number" class="form-control"
                                           value="{{ $user->mobile }}" id="validationDefault01">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Image</label>
                                    <input name="image" type="file" class="form-control" id="validationDefault01">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">ID Card</label>
                                    <input name="valid_id" type="file" class="form-control" id="validationDefault01">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Password</label>
                                    <input name="password" type="password" class="form-control" id="validationDefault01">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Country</label>
                                    <select class="form-control" name="country" id="country"></select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">State</label>
                                    <select class="form-control" name="state" id="state"></select>
                                    <script language="javascript">
                                        populateCountries("country", "state");
                                        populateCountries("country2");
                                    </script>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Bitcoin Wallet Address</label>
                                    <input name="bitcoin_wallet" type="text" class="form-control" value="{{ $user->bitcoin_wallet }}"
                                           id="validationDefault01">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Ethereum Wallet Address</label>
                                    <input name="ethereum_wallet" type="text" class="form-control" value="{{ $user->ethereum_wallet }}"
                                           id="validationDefault01">
                                </div>

                            </div>
                            <div class="form-group">
                                <button class="btn btn-info" type="submit">Update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="center-block">Copyright © {{ date('Y') }}
                    <a target="_blank" href="{{ url('/') }}">Crypto Growth Labs</a>, All rights reserved.</p>
            </div>
        </div>

    </div>
@endsection
