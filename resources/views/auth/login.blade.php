@extends('layouts.default')

@section('content')
<div class="login-container">
    <div class="card">
        <div class="card-header">Admin Login</div>

        <div class="card-body">
            <form method="POST" action="{{ url('/login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                        name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    Login
                </button>
            </form>
        </div>
    </div>
</div>

<style>
.login-container {
    height: 60vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card {
    width: 100%;
    max-width: 400px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.card-header {
    padding: 1rem;
    background: #f8f9fa;
    font-weight: bold;
}

.card-body {
    padding: 2rem;
}

.form-group {
    margin-bottom: 1rem;
}

.form-group label {
    margin-bottom: 0.5rem;
}

.btn-block {
    width: 100%;
    margin-top: 1rem;
}
</style>
@endsection 