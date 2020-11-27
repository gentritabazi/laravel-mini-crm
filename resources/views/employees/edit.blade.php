@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Employees - Edit ({{ $employee->first_name }})</div>

                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger mb-4">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif

                        <form method="POST" action="{{ route('employees.update', $employee->id) }}">
                            @csrf
                            @method('PATCH')

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>First name</label>
                                        <input class="form-control" name="first_name" value="{{ old('first_name', $employee->first_name) }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Last name</label>
                                        <input class="form-control" name="last_name" value="{{ old('last_name', $employee->last_name) }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Email</label>
                                        <input class="form-control" name="email" value="{{ old('email', $employee->email) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Phone</label>
                                        <input class="form-control" name="phone" value="{{ $employee->phone }}">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group form-group-default">
                                        <label>Company</label>
                                        <select class="form-control" name="company_id" value="{{ $employee->company->id }}">
                                            <option value="0">Select...</option>
                                            @foreach($companies as $company)
                                                <option value="{{ $company->id }}" {{ ($employee->company->id== $company->id ? "selected": "") }}>{{ $company->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right mt-4">
                                <button class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection