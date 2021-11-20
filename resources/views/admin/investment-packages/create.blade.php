@extends('layouts.admin')

@section('title')
    Add New Investment Package
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12 col-lg-6" style="margin: 0 auto;">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title"> Add New Investment Package</h4>
                            </div>
                        </div>
                        @include('includes.alerts')
                        <div class="iq-card-body">
                            <form method="post" action="{{ route('investments-packages.store') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Name</label>
                                        <input name="name" type="text" class="form-control"
                                               id="validationDefault01" required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Minimum Amount</label>
                                        <input name="min" type="number" class="form-control"
                                               id="validationDefault01" required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Maximum Amount</label>
                                        <input name="max" type="number" class="form-control"
                                               id="validationDefault01" required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Referral Bonus</label>
                                        <input name="referral_bonus" type="number" class="form-control"
                                               id="validationDefault01">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Monthly Profit</label>
                                        <input name="monthly_profit" type="number" class="form-control"
                                               id="validationDefault01">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">ROI</label>
                                        <input name="roi" type="text" class="form-control"
                                               id="validationDefault01">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Days Turnover</label>
                                        <input name="days_turnover" type="number" class="form-control"
                                               id="validationDefault01">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Expert Advice</label>
                                        <input name="expert_advice" type="text" class="form-control"
                                               id="validationDefault01">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Deposit Bonus</label>
                                        <input name="deposit_bonus" type="number" class="form-control"
                                               id="validationDefault01">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn brand-color" type="submit">Submit</button>
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
