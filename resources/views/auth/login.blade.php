@extends('layouts.app')

@section('css')
@endsection
@section('content')
    <section>
        <div class="container-fluid mt-10" style="text-align: center;">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="{{ asset('svg/rose flower-rafiki.svg') }}"
                        class="img-fluid" alt="Sample image">
                    <a href="https://www.floweradvisor.com.ph/flowersphilippines" class="btn btn-primary btn-lg">Make someone’s day</a>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start mb-5 mt-5">
                            <p class="lead fw-normal mb-0 me-3">Please log in with your account.</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4" data-mdb-input-init>
                            <input type="email" id="form3Example3"
                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                placeholder="Enter a valid email address" name="email" value="{{ old('email') }}"
                                autocomplete="email" autofocus />
                            <label class="form-label" for="form3Example3">Email address</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4" data-mdb-input-init>
                            <input type="password" id="form3Example4"
                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                placeholder="Enter password" name="password" autocomplete="current-password" />
                            <label class="form-label" for="form3Example4">Password</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-3">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3"
                                    name="remember" {{ old('remember') ? 'checked' : '' }} />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="{{ route('password.request') }}" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{ route('register') }}"
                                    class="link-danger">Register</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
