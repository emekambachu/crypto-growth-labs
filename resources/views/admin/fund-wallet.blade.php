@extends('layouts.admin')

@section('title')
    Fund Wallet
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12 col-lg-6" style="margin: 0 auto;">
                    <div class="iq-card">

                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Fund {{ $user->name }}'s Wallet</h4>
                                <p><strong>Current Balance:</strong> ${{ $user->wallet->amount }}</p>
                            </div>
                        </div>

                        @include('includes.alerts')

                        <div class="iq-card-body">
                            <form method="post" action="{{ route('admin.wallet.fund', $user->id) }}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Amount</label>
                                        <input name="amount" type="number" class="form-control" id="validationDefault01" required="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Description</label>
                                        <textarea class="form-control" name="description" required>
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn brand-color" type="submit">Fund</button>
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
