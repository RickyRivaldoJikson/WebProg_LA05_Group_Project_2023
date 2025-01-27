@extends('layout_format.header')

@section('container')
    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <section class = "vh-100" style = "background-color:skyblue;">
        <div class = "container h-100">
            <div class = "row d-flex justify-content-center align-items-center h-100">
                <div class = "col-lg-12 col-xl-11">
                    <div class = "card text-black" style = "border-radius: 30px;">
                        <div class = "card-body p-md-5">
                            <div class = "row justify-content-center">
                                <div class = "col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class = "text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>
                                    <form method = "POST" action = "{{ route('register.submit') }}">
                                        @csrf
                                        <div class = "mb-3">
                                            <label for = "username" class = "register-form-label">Username</label>
                                            <input type = "text" id = "username" name = "username" class = "register-form-control" required autofocus>
                                            @error('username')
                                                    <p class = "text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for = "email" class = "register-form-label">Email</label>
                                            <input type = "email" id = "email" name = "email" class = "register-form-control" required>
                                            @error('email')
                                                    <p class = "text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class = "mb-3">
                                            <label for = "password" class = "form-label">Password</label>
                                            <input type = "password" id = "password" name = "password" class = "form-control" required>
                                        </div>

                                        <div class = "mb-3">
                                            <label for = "role" class = "form-label">Role</label>
                                            <select name = "role" id = "role" class = "form-control" required>
                                                <option value = "customer">Customer</option>
                                                <option value = "admin">Admin</option>
                                            </select>
                                        </div>

                                        <p class = "small fw-bold mt-2 pt-1 mb-0">Already have account? <a href = "{{ route('login') }}" class="link-danger">Click here to login!</a></p>

                                        <div class = "d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type = "submit" class = "btn btn-primary btn-lg">Register</button>
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
