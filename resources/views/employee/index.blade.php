@extends('layouts.admin-panel.application')
@section('main-content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Employee</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Employee</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            @can('employee.create')
                <div class="row mb-3">
                    <div class="col-md-12">
                        <a href="{{ route('employees.create') }}" class="btn btn-primary">Add Employee</a>
                    </div>
                </div>
            @endcan
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date of Birth</th>
                                    <th>Date of Joining</th>
                                    @if (Auth::user()->hasPermissionTo('employee.update') || Auth::user()->hasPermissionTo('employee.delete'))
                                        <th>Actions</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->employee_id }}</td>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->dob->format('Y-m-d') }}</td>
                                        <td>{{ $employee->doj->format('Y-m-d') }}</td>
                                        @if (Auth::user()->hasPermissionTo('employee.update') || Auth::user()->hasPermissionTo('employee.delete'))
                                            <td>
                                                @can('employee.update')
                                                    <a href="{{ route('employees.edit', $employee) }}" class="btn btn-sm btn-primary">Edit</a>
                                                @endcan

                                                @can('employee.delete')
                                                    <form action="{{ route('employees.destroy', $employee) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                @endcan
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection
