@extends('layouts.admin')

@section('title')
    Withdrawal Requests
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title" style="display: inline-block;">
                                <h4 style="float: left;" class="card-title mr-2">Manage Withdrawals</h4>
                            </div>
                            @include('includes.alerts')
                        </div>
                        <div class="iq-card-body">
                            <p>Manage User Withdrawals here</p>
                            <div class="table-responsive">
                                @if($withdrawals->count() > 0)
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">User</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Wallet Balance</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Cryptocurrency</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($withdrawals as $withdraw)
                                            @if($withdraw->user)
                                                <tr>
                                                    <td>{{ $withdraw->user->name }}</td>
                                                    <td>{{ $withdraw->user->email }}</td>
                                                    <td>
                                                        ${{ $withdraw->user->wallet->amount }}
                                                    </td>
                                                    <td>${{ $withdraw->amount }}</td>
                                                    <td>
                                                        {{ $withdraw->cryptocurrency }}<br>
                                                        {{ $withdraw->cryptocurrency_address }}
                                                    </td>
                                                    <td>{{ $withdraw->created_at->format('d M Y') }}</td>
                                                    <td>{{ $withdraw->is_approved ? 'Approved' : 'Pending' }}</td>
                                                    <td>
                                                        <form method="POST" action="{{ action('AdminController@approveWithdrawal', $withdraw->id) }}">
                                                            @csrf
                                                            <button type="submit" class="btn btn-warning btn-sm">
                                                                {{$withdraw->is_approved ? 'Cancel Withdraw' : 'Approve Withdraw' }}
                                                            </button>
                                                        </form>
                                                        <a href="{{ url('admin/fund-wallet/'.$withdraw->user->id) }}">
                                                            <button class="btn btn-info btn-sm">Fund Wallet</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th scope="col">User</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Investment ID</th>
                                            <th scope="col">Package</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
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

                <div class="col-md-6 col-md-12">
                    <nav aria-label="Page navigation mb-3">
                        @if ($withdrawals->lastPage() > 1)
                            {{ $withdrawals->links() }}
                        @endif
                    </nav>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
