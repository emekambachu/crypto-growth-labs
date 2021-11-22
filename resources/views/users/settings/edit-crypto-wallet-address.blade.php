@extends('layouts.users')

@section('title')
    Edit Wallet Address
@endsection

@section('contents')
    <div class="layout-px-spacing">
        <div class="page-header">
            <div class="page-title">
                <h3 class="text-dark">Edit Crypto Wallet Address</h3>
            </div>
        </div>

        <div class="row layout-top-spacing">

            <div id="flStackForm" class="col-lg-6 col-md-6 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Edit crypto wallet address</h4>
                            </div>
                            @include('includes.admin-alerts')
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form method="post" action="{{ route('settings.wallets.edit', $address->id) }}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Crypto Currency</label>
                                    <input name="name" type="text" class="form-control"
                                           value="{{ $address->name }}" id="validationDefault01">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Crypto Currency Address</label>
                                    <input name="address" type="text" class="form-control"
                                           value="{{ $address->address }}" id="validationDefault01">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Barcode</label>
                                    <input name="barcode" type="file" class="form-control"
                                           id="validationDefault01">
                                    @if(!empty($address->barcode))
                                        <img src="{{ asset('photos/crypto-wallet-address/'.$address->barcode) }}"
                                             width="200"/>
                                    @endif
                                </div>

                                <div class="col-md-12 mb-3">
                                    <button class="btn btn-info" type="submit">Update</button>
                                </div>
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
