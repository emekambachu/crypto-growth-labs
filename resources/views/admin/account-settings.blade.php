@extends('layouts.admin')

@section('title')
    Account Settings
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 center">
                    @include('includes.alerts')
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="iq-card">

                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Update your account</h4>
                            </div>
                        </div>

                        <div class="iq-card-body">
                            <form method="post" action="{{ route('admin.update-account') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Name *</label>
                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required>
                                </div>

                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>
                                </div>

                                <div class="form-group">
                                    <label>Username *</label>
                                    <input type="text" class="form-control" name="username" value="{{ Auth::user()->username }}" required>
                                </div>

                                <div class="form-group">
                                    <label>Password *</label>
                                    <input type="password" class="form-control" name="password">
                                </div>

                                <button type="submit" class="btn btn-secondary" style="background-color: #002D55; color: #fff;">Update</button>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-sm-12 col-lg-8">
                    <div class="iq-card">

                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Your Bitcoin Address</h4>
                            </div>
                        </div>

                        <form method="post" action="{{ route('admin.wallet-address.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row p-3">
                                <div class="col-12">
                                    <h4>Add cryptocurrency address</h4>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label>Currency Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label>Currency Address</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label>Barcode Image</label>
                                    <input class="form-control" type="file" name="image">
                                </div>
                                <button class="btn btn-primary ml-3 mt-2" type="submit">Submit</button>
                            </div>
                        </form>

                        <div class="row">
                            @foreach($walletAddress as $address)
                            <div class="col-md-6 col-sm-12">
                                <div class="iq-card-body">
                                <img src="{{ asset('photos/'.$address->image) }}" width="180"/>
                                <h5>{{ $address->name }}</h5>
                                <p>{{ $address->address }}</p>
                                    <a class="btn btn-primary"
                                       href="{{ route('admin.wallet-address.edit', $address->id) }}">Edit</a>
                                    <form method="post" action="{{ route('admin.wallet-address.delete', $address->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger float-left">Delete</button>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
