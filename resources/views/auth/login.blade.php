@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg" style="border: none;">
                    <!-- Card Header with Gradient Background -->
                    <div class="card-header text-white" style="background: linear-gradient(135deg, #6a11cb, #2575fc);">
                        <h3 class="mb-0 text-center">{{ __('Login') }}</h3>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Field -->
                            <div class="mb-4">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Password Field -->
                            <div class="mb-4">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary w-100" style="background: linear-gradient(135deg, #6a11cb, #2575fc); border: none; padding: 10px; font-size: 18px;">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            <!-- Register Link -->
                            <div class="text-center">
                                <a href="{{ route('register') }}" class="text-primary" style="text-decoration: none;">Don't have an account? <strong>Register</strong></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom CSS for Additional Styling -->
    <style>
        .card {
            border-radius: 15px;
            overflow: hidden;
        }

        .card-header {
            padding: 20px;
            font-size: 24px;
            font-weight: 600;
        }

        .card-body {
            padding: 30px;
        }

        .form-control {
            border-radius: 10px;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ddd;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 5px rgba(106, 17, 203, 0.5);
        }

        .btn-primary {
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(106, 17, 203, 0.4);
        }

        .text-primary {
            color: #6a11cb !important;
        }

        .text-primary:hover {
            text-decoration: underline;
        }
    </style>
@endsection
