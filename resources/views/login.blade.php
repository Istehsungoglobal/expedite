@extends('layouts.fontpage')

@section('title', 'login')

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<style>
    .login-container {
      max-width: 400px;
      margin: 80px auto;
      padding: 30px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .login-btn {
      background-color: #f4511e;
      color: #fff;
      font-weight: 600;
    }
    .login-btn:hover {
      background-color: #d84315;
    }
    .login-footer {
      border-top: 1px solid #eee;
      padding-top: 15px;
    }
    .form-check-input {
      margin-top: 5px;
    }
    .form-check-label {
      margin-top: 3px;
    }
</style>

@endpush


@section('content')

<div class="login-container">
    <h5 class="mb-4 fw-bold">Log In</h5>

    <form>
      <div class="mb-3">
        <label class="form-label">Email Address</label>
        <input type="email" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" required>
      </div>

      <button type="submit" class="btn login-btn w-100 mb-3 nextbtn">Log In</button>

      <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="rememberMe">
          <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
        <a href="#" class="text-decoration-none text-dark small">Forgot password?</a>
      </div>

      <div class="login-footer text-center">
        <small>Don’t have an account? <a href="#" class="text-decoration-none text-danger fw-bold">Sign up</a></small>
      </div>
    </form>
  </div>

@endsection

@push('scripts')


@endpush
