@extends('layouts.users')

@section('title')
    Create Investment
@endsection

@section('contents')
    <div class="layout-px-spacing">
        <div class="page-header">
            <div class="page-title">
                <h3 class="text-dark">New Investment</h3>
            </div>
        </div>

        <div class="row layout-top-spacing">

            <div id="flStackForm" class="col-lg-4 col-md-4 col-12 layout-spacing layout-top-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Start New Investment</h4>
                            </div>
                            <p>Update your bitcoin wallet address before payment.</p>
                            @include('includes.alerts')
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form method="post" action="{{ url('users/submit-investments') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="validationDefault01">Amount</label>
                                <input name="amount" type="number" class="form-control" id="validationDefault01" required="">
                            </div>
                            <div class="form-group mb-4">
                                <label for="validationDefault02">Cryptocurrency</label>
                                <select name="cryptocurrency" class="form-control" required>
                                    <option disabled>Select currency</option>
                                    @foreach($walletAddresses->adminWalletAddresses as $address)
                                        <option value="{{ $address->name }}">{{ $address->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="validationDefault02">Package</label>
                                <select name="package" class="form-control" required>
                                    <option disabled>Select Investment Plan</option>
                                    @foreach($packages as $pack)
                                        <option value="{{ $pack->id }}">{{ $pack->name }} | {{ !empty($pack->min) ? '$'.number_format($pack->min) : 0 }} to {{ !empty($pack->max) ? '$'.number_format($pack->max) : 'Unlimited' }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>

                    </div>
                </div>
            </div>

            <div id="card_2" class="col-lg-8 col-md-8 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <h5 class="card-title">Make payment to the cryptocurrency wallet of your choice</h5>

                        @foreach($walletAddresses->adminWalletAddresses as $address)
                        <div class="card component-card_2 mb-2">
                            <div class="card-body">
                                <p class="card-text">{{ $address->name }}</p>
                                <h5 class="card-title">{{ $address->address }}</h5>
                            </div>
                            @if($address->image !== null)
                            <img width="200" src="{{ asset("photos/{$address->image}") }}"
                                 class="card-img-top" alt="widget-card-2">
                            @endif
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>

        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © {{ date('Y') }}
                    <a target="_blank" href="{{ url('/') }}">Bulls Market Traders</a>, All rights reserved.</p>
            </div>
        </div>

    </div>
@endsection
