@extends('layouts.no-nav')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100" style="background-color: #007bff;">
    <div class="card shadow" style="width: 25rem; border-radius: 10px;">
        <div class="card-body">
            <div class="text-center mb-4">
                <img src="https://via.placeholder.com/50" alt="Logo" class="mb-2">
                <h4 class="fw-bold">Employee Data Master</h4>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Enter Your Email</label>
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" required autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Enter Your Password</label>
                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="bi bi-box-arrow-in-right me-2"></i> Log In
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
