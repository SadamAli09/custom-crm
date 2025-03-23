@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Lead</h1>
        <form action="{{ route('leads.update', $lead->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $lead->name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $lead->email }}" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $lead->phone }}">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="New" {{ $lead->status == 'New' ? 'selected' : '' }}>New</option>
                    <option value="Contacted" {{ $lead->status == 'Contacted' ? 'selected' : '' }}>Contacted</option>
                    <option value="Qualified" {{ $lead->status == 'Qualified' ? 'selected' : '' }}>Qualified</option>
                    <option value="Lost" {{ $lead->status == 'Lost' ? 'selected' : '' }}>Lost</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="assigned_to" class="form-label">Assigned To</label>
                <select class="form-control" id="assigned_to" name="assigned_to" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $lead->assigned_to == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
