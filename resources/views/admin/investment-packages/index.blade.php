@extends('layouts.admin')

@section('title')
    Investment Packages
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title" style="display: inline-block;">
                                <h4 style="float: left;" class="card-title mr-2">Manage Investments</h4>
                                <a style="float: left;" href="{{ route('investments-packages.create') }}">
                                    <button class="btn btn-sm btn-info">Add Investment Package</button>
                                </a>
                            </div>
                            @include('includes.alerts')
                        </div>
                        <div class="iq-card-body">
                            <p>Manage Investment Packages</p>
                            <div class="table-responsive">
                                @if($packages->count() > 0)
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Range</th>
                                            <th scope="col">Referral Bonus</th>
                                            <th scope="col">Monthly Profit</th>
                                            <th scope="col">ROI</th>
                                            <th scope="col">Days Turnover</th>
                                            <th scope="col">Expert Advice</th>
                                            <th scope="col">Deposit Bonus</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($packages as $package)
                                            <tr>
                                                <td>{{ $package->name }}</td>
                                                <td>${{ $package->min }} to ${{ $package->max }}</td>
                                                <td>%{{ $package->referral_bonus }}</td>
                                                <td>%{{ $package->monthly_profit }}</td>
                                                <td>%{{ $package->roi }}</td>
                                                <td>{{ $package->days_turnover }}</td>
                                                <td>{{ $package->expert_advice }}</td>
                                                <td>%{{ $package->deposit_bonus }}</td>
                                                <td>
                                                    <a href="{{ route('investments-packages.edit', $package->id) }}">
                                                        <button class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit</button>
                                                    </a>
                                                    <form method="POST" action="{{ route('investments-packages.destroy', $package->id) }}">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="btn btn-sm btn-danger" type="submit">
                                                            <i class="fa fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Range</th>
                                            <th scope="col">Referral Bonus</th>
                                            <th scope="col">Monthly Profit</th>
                                            <th scope="col">ROI</th>
                                            <th scope="col">Days Turnover</th>
                                            <th scope="col">Expert Advice</th>
                                            <th scope="col">Deposit Bonus</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                @else
                                    No Current Investments
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
