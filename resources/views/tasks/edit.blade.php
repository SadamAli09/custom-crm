@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Task</h1>
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description">{{ $task->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="due_date" class="form-label">Due Date</label>
                <input type="date" class="form-control" id="due_date" name="due_date" value="{{ $task->due_date }}" required>
            </div>
            <div class="mb-3">
                <label for="priority" class="form-label">Priority</label>
                <select class="form-control" id="priority" name="priority" required>
                    <option value="Low" {{ $task->priority == 'Low' ? 'selected' : '' }}>Low</option>
                    <option value="Medium" {{ $task->priority == 'Medium' ? 'selected' : '' }}>Medium</option>
                    <option value="High" {{ $task->priority == 'High' ? 'selected' : '' }}>High</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="assigned_to" class="form-label">Assigned To</label>
                <select class="form-control" id="assigned_to" name="assigned_to" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $task->assigned_to == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
