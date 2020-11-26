@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Companies - Create</div>

                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger mb-4">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif

                        <form method="POST" action="{{ route('companies.store') }}">
                            @csrf

                            <div class="text-center mb-4">
                                <img width="100" height="100" src="{{ asset('images/no-image-available.png') }}">
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Name</label>
                                        <input class="form-control" name="name" value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Email</label>
                                        <input class="form-control" name="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Website</label>
                                        <input class="form-control" name="website" value="{{ old('website') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="text-right mt-4">
                                <button class="btn btn-success">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection