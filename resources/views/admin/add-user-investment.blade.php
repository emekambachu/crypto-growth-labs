@extends('layouts.admin')

@section('title')
    Add New Investment for {{ $user->name }}
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">

            <div class="row">

                <div class="col-sm-12 col-lg-6">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title"> Add New Investment for {{ $user->name }}</h4>
                            </div>
                        </div>
                        @include('includes.alerts')
                        <div class="iq-card-body">
                            <form method="post" action="{{ url('admin/add-users-investments/'.$user->id) }}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Amount</label>
                                        <input name="amount" type="number" class="form-control" id="validationDefault01" required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault02">Cryptocurrency</label>
                                        <select name="cryptocurrency" class="form-control" required>
                                            <option selected>Select cryptocurrency</option>
                                            <option value="Bitcoin">Bitcoin</option>
                                            <option value="Ethereum">Ethereum</option>
                                            <option value="Bitcoin Cash">Bitcoin Cash</option>
                                            <option value="Litecoin">Litecoin</option>
                                            <option value="Binance Coin">Binance Coin</option>
                                            <option value="Ripple">Ripple</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault02">Package</label>
                                        <select name="package" class="form-control" required>
                                            <option disabled>Select Investment Plan</option>
                                            @foreach($packages as $pack)
                                                <option value="{{ $pack->id }}">{{ $pack->name }} ${{ number_format($pack->min) }} - ${{ number_format($pack->max) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn brand-color" type="submit">Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
@endsection
