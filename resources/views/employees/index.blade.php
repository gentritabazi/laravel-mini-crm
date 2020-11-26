@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header">Employees</div>

                <div class="card-body">
                    <div class="text-right mb-4">
                        <a class="btn btn-success" href="{{ route('employees.create') }}">Create new employee</a>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success mb-4" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">Employees list</div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Company</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($employees as $employee)
                                        <tr>
                                            <td class="text-center">{{ $employee->id }}</td>
                                            <td>{{ $employee->first_name }}</td>
                                            <td>{{ $employee->last_name }}</td>
                                            <td>{{ $employee->company->name }}</td>
                                            <td>{{ $employee->email }}</td>
                                            <td>{{ $employee->phone }}</td>
                                            <td class="text-center">
                                                <a class="btn btn-info btn-sm" href="{{ route('employees.show', $employee->id) }}">View</a>
                                                <a class="btn btn-secondary btn-sm" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                                                <form method="POST" action="{{ route('employees.destroy', $employee->id) }}" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type='submit' class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Oops! Nothing to show.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <div class="float-right">
                                @if($employees->total() <= 10)
                                    @include('components.no-pagination')
                                @else
                                    {{ $employees->links() }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection