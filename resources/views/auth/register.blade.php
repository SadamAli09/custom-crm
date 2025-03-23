@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg" style="border: none;">
                    <!-- Card Header with Gradient Background -->
                    <div class="card-header text-white" style="background: linear-gradient(135deg, #6a11cb, #2575fc);">
                        <h3 class="mb-0 text-center">{{ __('Register') }}</h3>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name Field -->
                            <div class="mb-4">
                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Email Field -->
                            <div class="mb-4">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Password Field -->
                            <div class="mb-4">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Confirm Password Field -->
                            <div class="mb-4">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <!-- "I am not a robot" Checkbox -->
                            <div class="mb-4">
                                <div class="captcha-container">
                                    <div class="captcha-box">
                                        <input type="checkbox" class="form-check-input @error('not_robot') is-invalid @enderror" id="not_robot" name="not_robot" required>
                                        <label class="form-check-label" for="not_robot">
                                            <span class="captcha-icon">🤖</span> I am not a robot
                                        </label>
                                    </div>
                                    @error('not_robot')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary w-100" style="background: linear-gradient(135deg, #6a11cb, #2575fc); border: none; padding: 10px; font-size: 18px;">
                                    {{ __('Register') }}
                                </button>
                            </div>

                            <!-- Login Link -->
                            <div class="text-center">
                                <a href="{{ route('login') }}" class="text-primary" style="text-decoration: none;">Already have an account? <strong>Login</strong></a>
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

        .captcha-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .captcha-box {
            background: #f8f9fa;
            border: 2px solid #6a11cb;
            border-radius: 10px;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .captcha-icon {
            font-size: 24px;
        }

        .form-check-input {
            width: 20px;
            height: 20px;
            margin-top: 0;
        }

        .form-check-label {
            font-size: 18px;
            font-weight: 500;
            color: #333;
        }
    </style>
@endsection
