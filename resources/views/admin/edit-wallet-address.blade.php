@extends('layouts.admin')

@section('title')
    Edit Wallet Address
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
                                <h4 class="card-title">Update {{ $address->name }}</h4>
                            </div>
                        </div>

                        <div class="iq-card-body">
                            <form method="post" action="{{ route('admin.wallet-address.update', $address->id) }}"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Cryptocurrency Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $address->name }}" required>
                                </div>

                                <div class="form-group">
                                    <label>Cryptocurrency Address</label>
                                    <input type="text" class="form-control" name="address" value="{{ $address->address }}" required>
                                </div>

                                <div class="form-group">
                                    <label>Update Barcode</label>
                                    <input type="file" class="form-control" name="image">
                                    <img src="{{ asset('photos/'.$address->image) }}" width="180"/>
                                </div>

                                <button type="submit" class="btn btn-secondary" style="background-color: #002D55; color: #fff;">Update</button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
@endsection
