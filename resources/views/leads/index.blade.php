@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Leads</h1>
            <a href="{{ route('leads.create') }}" class="btn btn-primary">Add Lead</a>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
{{--                <th>Phone</th>--}}
                <th>Status</th>
                <th>Assigned To</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($leads as $lead)
                <tr>
                    <td>{{ $lead->name }}</td>
                    <td>{{ $lead->email }}</td>
{{--                    <td>{{ $lead->phone }}</td>--}}
                    <td>{{ $lead->status }}</td>
                    <td>{{ $lead->user->name }}</td>
                    <td>
                        <a href="{{ route('leads.edit', $lead->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('leads.destroy', $lead->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
