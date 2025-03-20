@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Dashboard</h1>
        <div class="row">
            <!-- Contacts Card -->
            <div class="col-md-4 mb-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Contacts</h5>
                        <p class="card-text">Manage your contacts here.</p>
                        <a href="{{ route('contacts.index') }}" class="btn btn-light">Go to Contacts</a>
                    </div>
                </div>
            </div>

            <!-- Leads Card -->
            <div class="col-md-4 mb-4">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">Leads</h5>
                        <p class="card-text">Manage your leads here.</p>
                        <a href="{{ route('leads.index') }}" class="btn btn-light">Go to Leads</a>
                    </div>
                </div>
            </div>

            <!-- Tasks Card -->
            <div class="col-md-4 mb-4">
                <div class="card bg-warning text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Tasks</h5>
                        <p class="card-text">Manage your tasks here.</p>
                        <a href="{{ route('tasks.index') }}" class="btn btn-light">Go to Tasks</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
