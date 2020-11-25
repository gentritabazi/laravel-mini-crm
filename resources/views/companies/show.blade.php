@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Companies - View ({{ $company->name }})</div>

                    <div class="card-body">
                        <div class="text-center mb-4">
                            @if($company->logo)
                                <img width="100" height="100" src="{{ asset('storage/'. $company->logo) }}">
                            @else
                                <img width="100" height="100" src="{{ asset('images/no-image-available.png') }}">
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group form-group-default">
                                    <label>Name</label>
                                    <input class="form-control" disabled value="{{ $company->name }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-group-default">
                                    <label>Email</label>
                                    <input class="form-control" disabled value="{{ $company->email }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-group-default">
                                    <label>Website</label>
                                    <input class="form-control" disabled value="{{ $company->website }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection