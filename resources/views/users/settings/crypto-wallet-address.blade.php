@extends('layouts.users')

@section('title')
    Crypto Wallet Addresses
@endsection

@section('contents')
    <div class="layout-px-spacing">
        <div class="page-header">
            <div class="page-title">
                <h3 class="text-dark">Crypto Wallet Addresses</h3>
            </div>
        </div>

        <div class="row layout-top-spacing">

            <div class="col-12">
                @include('includes.admin-alerts')
            </div>

            <div id="flStackForm" class="col-lg-6 col-md-6 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Add crypto wallet address</h4>
                            </div>
                            <p>Add as many crypto wallet addresses to enable us make payments to your wallet</p>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form method="post" action="{{ route('settings.wallet.add') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Crypto Currency</label>
                                    <input name="name" type="text" class="form-control"
                                           id="validationDefault01">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Crypto Currency Address</label>
                                    <input name="address" type="text" class="form-control"
                                           id="validationDefault01">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Barcode</label>
                                    <input name="barcode" type="file" class="form-control"
                                           id="validationDefault01">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button class="btn btn-info" type="submit">Add</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div id="card_2" class="col-lg-6 col-md-6 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <h5 class="card-title">Make payment to the cryptocurrency wallet of your choice</h5>

                        @foreach($addresses as $address)
                            <div class="card component-card_2 mb-2">
                                <div class="card-body">
                                    <p class="card-text">{{ $address->name }}</p>
                                    <h5 class="card-title">{{ $address->address }}</h5>
                                    @if(!empty($address->barcode))
                                        <img width="80" src="{{ asset("photos/crypto-wallet-address/{$address->barcode}") }}"
                                             class="align-content-center" alt="widget-card-2">
                                    @endif

                                    <form method="post" action="{{ route('settings.wallets.delete', $address->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-danger float-right">Delete</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach

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
