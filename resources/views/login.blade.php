@extends('layouts.auth')

@section('title', 'Login')

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Login</h4>
        </div>

        <div class="card-body">
            <form method="POST"
                action="{{ route('auth') }}"
                class="needs-validation"
                novalidate="">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username"
                        type="username"
                        class="form-control"
                        name="username"
                        tabindex="1"
                        required
                        autofocus>
                    <div class="invalid-feedback">
                        Please fill in your username
                    </div>
                </div>

                <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label">Password</label>
                    </div>
                    <div class="input-group">
                        <input id="password"
                            type="password"
                            class="form-control"
                            name="password"
                            tabindex="2"
                            required>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i id="toggle-password" class="fas fa-eye" onclick="togglePasswordVisibility()" style="cursor: pointer;"></i>
                            </span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        please fill in your password
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit"
                        class="btn btn-primary btn-lg btn-block"
                        tabindex="4">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('password');
            var passwordType = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = passwordType;
            var toggleIcon = document.getElementById('toggle-password');
            toggleIcon.classList.toggle('fa-eye');
            toggleIcon.classList.toggle('fa-eye-slash');
        }
    </script>
    <!-- Page Specific JS File -->
@endpush
