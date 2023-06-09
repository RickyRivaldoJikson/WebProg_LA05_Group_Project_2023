@extends('layout_format.header')

@section('container')
    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 30px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class = "text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
                                    <form method = "POST" action="{{ route('login.submit') }}">
                                    @csrf
                                        <!-- Input registered email to login -->
                                        <div class = "d-flex flex-row align-items-center mb-4">
                                            <div class = "form-outline flex-fill mb-0">
                                                <label class = "login-form-label" for = "email">Email</label>
                                                <input type = "email" id = "email" name = "email" class = "login-form-control" placeholder = "Please type a valid email address" required autofocus>
                                            </div>
                                        </div>

                                        <!-- Input registered password to login -->
                                        <div class = "d-flex flex-row align-items-center mb-4">
                                            <div class = "form-outline flex-fill mb-0">
                                                <label class = "login-form-label" for="password">Password</label>
                                                <input type = "password" id = "password" name = "password" class = "login-form-control" placeholder = "Please type a password minimum 8 characters" required>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- Checkbox -->
                                            <div class = "form-check mb-0">
                                                <input class = "form-check-input me-2" type = "checkbox" value = "" id = "remember-me" name = "remember-me">
                                                <label class = "form-check-label" for="remember-me">Remember me</label>
                                            </div>
                                            <div class = "text-center text-lg-start mt-4 pt-2">
                                                <p class = "small fw-bold mt-2 pt-1 mb-0" style = "color:blue;">Don't have an account yet? <a href = "{{ route('register') }}" class = "link-danger">Click here to register!</a></p>
                                                <button type = "submit" class = "btn btn-primary btn-lg" style = "padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@extends('layout_format.footer')
