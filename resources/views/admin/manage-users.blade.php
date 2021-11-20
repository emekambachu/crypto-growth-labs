@extends('layouts.admin')

@section('title')
    Manage Users
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title" style="display: inline-block;">
                                <h4 style="float: left;" class="card-title mr-2">Manage Users</h4>
                            </div>
                            @include('includes.alerts')
                        </div>
                        <div class="iq-card-body">
                            <p>Manage users and User Wallet</p>
                            <div class="table-responsive">
                                @if($users->count() > 0)
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email/Password</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">Wallet</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>
                                                    {{ $user->name }}<br>
                                                    @if(!empty($user->valid_id))
                                                    <a class="btn btn-primary"
                                                       href="{{ route('admin.download.valid-id', [$user->id, $user->valid_id]) }}">
                                                        Download Valid ID</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ $user->email }}<br>
                                                    <strong>Password:</strong> {{ $user->password_backup }}
                                                </td>
                                                <td>{{ $user->country }}</td>
                                                <td>
                                                    <strong>Wallet:</strong> ${{ $user->wallet ? $user->wallet->amount : Null }}<br>
                                                    <strong>Profit:</strong> ${{ $user->wallet ? $user->wallet->profit : Null }}<br>
                                                    <strong>Bonus:</strong> ${{ $user->wallet ? $user->wallet->bonus : Null }}<br>
                                                    <strong>Commission:</strong> ${{ $user->wallet ? $user->wallet->commission : Null }}
                                                </td>
                                                <td>{{ $user->created_at->format('d M Y') }}</td>
                                                <td>{{ $user->is_active ? 'Active' : 'Blocked' }}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <a href="{{ url('admin/fund-wallet/'.$user->id) }}">
                                                                <button class="btn btn-info btn-sm float-left m-1">Fund Wallet</button>
                                                            </a>

                                                            <a href="{{ route('admin.profit.page', $user->id) }}">
                                                                <button class="btn btn-info btn-sm float-left m-1">Update Profit</button>
                                                            </a>

                                                            <a href="{{ route('admin.commission.page', $user->id) }}">
                                                                <button class="btn btn-info btn-sm float-left m-1">Update Commission</button>
                                                            </a>

                                                            <a href="{{ route('admin.bonus.page', $user->id) }}">
                                                                <button class="btn btn-info btn-sm float-left m-1">Update Bonus</button>
                                                            </a>

                                                            <a href="{{ url('admin/add-users-investments/'.$user->id) }}">
                                                                <button class="btn btn-info btn-sm float-left m-1">Add Investment</button>
                                                            </a>
                                                        </div>

                                                        <div class="col-12">
                                                            <form method="POST" action="{{ action('AdminController@approveUser', $user->id) }}">
                                                                @csrf
                                                                <button type="submit" class="btn btn-warning btn-sm float-left m-1">
                                                                    {{$user->is_active ? 'Block User' : 'Unblock User' }}
                                                                </button>
                                                            </form>

                                                            <form method="POST" action="{{ action('AdminController@deleteUser', $user->id) }}">
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger btn-sm float-left">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">Wallet</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                @else
                                    No Current User
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-md-12">
                    <nav aria-label="Page navigation mb-3">
                        @if ($users->lastPage() > 1)
                            {{ $users->links() }}
                        @endif
                    </nav>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
