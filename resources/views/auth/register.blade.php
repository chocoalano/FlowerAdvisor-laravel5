@extends('layouts.app')

@section('content')
<section>
    <div class="container-fluid mt-10" style="text-align: center;">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="{{ asset('svg/rose flower-pana.svg') }}"
                    class="img-fluid" alt="Sample image">
                    <a href="https://www.floweradvisor.com.ph/flowersphilippines" class="btn btn-primary btn-lg">Make someone’s day</a>
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start mb-5 mt-5">
                        <p class="lead fw-normal mb-0 me-3">Please register your account.</p>
                    </div>

                    <!-- Name input -->
                    <div class="form-outline mb-4" data-mdb-input-init>
                        <input type="text" id="name"
                            class="form-control form-control-lg @error('name') is-invalid @enderror"
                            placeholder="Enter a valid fullname" name="name" value="{{ old('name') }}" />
                        <label class="form-label" for="name">Fullname</label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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

                    <!-- Confirm Password input -->
                    <div class="form-outline mb-4" data-mdb-input-init>
                        <input type="password" id="password_confirmation"
                            class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror"
                            placeholder="Enter password confirmation" name="password_confirmation" autocomplete="current-password" />
                        <label class="form-label" for="password_confirmation">Confirm Password</label>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Sign Up</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Do you have an account? <a href="{{ route('login') }}"
                                class="link-danger">Sign in</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
@endsection
