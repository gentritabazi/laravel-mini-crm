@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header">Companies</div>

                <div class="card-body">
                    <div class="text-right mb-4">
                        <a class="btn btn-success" href="{{ route('companies.create') }}">Create new company</a>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success mb-4" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">Companies list</div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Website</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($companies as $company)
                                        <tr>
                                            <td class="text-center">{{ $company->id }}</td>
                                            <td>{{ $company->name }}</td>
                                            <td>{{ $company->email }}</td>
                                            <td>{{ $company->website }}</td>
                                            <td class="text-center">
                                                <a class="btn btn-info btn-sm" href="{{ route('companies.show', $company->id) }}">View</a>
                                                <a class="btn btn-secondary btn-sm" href="{{ route('companies.edit', $company->id) }}">Edit</a>
                                                <form method="POST" action="{{ route('companies.destroy', $company->id) }}" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type='submit' class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Oops! Nothing to show.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <div class="float-right">
                                @if($companies->total() <= 10)
                                    @include('components.no-pagination')
                                @else
                                    {{ $companies->links() }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection