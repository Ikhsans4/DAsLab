@extends('Layout.login')
@section('title', "Login D'AsLab")


@section('content')
    <!-- Content untuk form -->
    <div class="d-flex justify-content-center" style="margin-top: 12rem">
        <form action="{{ url('/admin/dashboard') }}" method="get">@csrf
            <div>
                <h3 class="text-center text-uppercase">Login</h3>

            </div>
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="tel" class="form-control r-10" id="npm" name="npm" placeholder="NPM" style="width: 400px;"
                    autofocus required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control r-10" id="password" name="password" placeholder="Password"
                    required>
            </div>
            <div class="text-center" style="margin-top: 2em;">
                <button type="submit" class="btn btn-primary padd-button rounded-pill">LOGIN</button>
            </div>
            <div class="mt-3 text-center">
                <p>Belum punya akun? <a class="fw-bolder" href="signup">Sign up</a></p>
            </div>
        </form>
    </div>
    <!-- Akhir dari form -->
@endsection
