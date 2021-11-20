@extends('layouts.users')

@section('title')
    Your Investments
@endsection

@section('contents')
    <div class="layout-px-spacing">
        <div class="page-header">
            <div class="page-title">
                <h3 class="text-white">Your Investments</h3>
            </div>

        </div>

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div id="tradingview_fe7fb"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL Chart</span></a> by TradingView</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                        new TradingView.widget(
                            {
                                "width": 1500,
                                "height": 500,
                                "symbol": "NASDAQ:AAPL",
                                "interval": "D",
                                "timezone": "Etc/UTC",
                                "theme": "dark",
                                "style": "1",
                                "locale": "en",
                                "toolbar_bg": "#f1f3f6",
                                "enable_publishing": false,
                                "allow_symbol_change": true,
                                "container_id": "tradingview_fe7fb"
                            }
                        );
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>

            <div id="tableDropdown" class="col-lg-8 col-md-8 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Your Investments</h4>
                                <a href="{{ route('investments.create') }}">
                                    <button class="btn btn-success btn-sm" style="float: left;">Add New</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-4">
                                <thead>
                                <tr>
                                    <th scope="col">Investment ID</th>
                                    <th scope="col">Package</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($investments as $invest)
                                    <tr>
                                        <td>{{ $invest->invest_id }}</td>
                                        <td>{{ $invest->investmentPackage ? $invest->investmentPackage->name : '' }}</td>
                                        <td>${{ number_format($invest->amount) }}</td>
                                        <td>{{ $invest->created_at->format('d M Y') }}</td>
                                        <td>
                                            @if($invest->is_approved)
                                                <span class="badge badge-success">Approved</span>
                                            @else
                                                <span class="badge badge-danger">Un-Approved</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">

                <div class="widget widget-account-invoice-one">

                    <div class="widget-heading">
                        <h5 class="">Account Info</h5>
                    </div>

                    <div class="widget-content">
                        <div class="invoice-box">

                            <div class="acc-total-info">
                                <h5>Balance</h5>
                                <p class="acc-amount">${{ $user->wallet->amount }}</p>
                            </div>

                            <div class="inv-detail">
                                <div class="info-detail-1">
                                    <p>Withdrawals</p>
                                    <p>$ {{ $total_withdrawals ? $total_withdrawals->sum('amount') : 0 }}</p>
                                </div>
                            </div>

                            <div class="inv-action">
                                <a href="{{ url('users/withdrawal') }}" class="btn btn-dark">Withdraw</a>
                            </div>
                        </div>
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
