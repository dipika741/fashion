@extends('fashion.header')

@section('title')
    login
@stop

@section('banner')
    <section class="wthree-row pt-3 pb-sm-5 w3-contact" >
        <div class="container py-sm-5 pb-5">   
             <div class="row">
                <div class="col-md-6 align-self-center">
                    <img src="{{ asset('images/p3.png') }}" class="img-fluid" alt="login_image" />
                </div>
                <div class="col-md-6" style="border-style: groove">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5><hr>
                    <form action="{{ route('login') }}" method="post">
                        
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Your Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Login">
                            
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                        <p class="text-center mt-3">Not Registered yet?
                        <a href="/fashion/registration"  class="text-dark login_btn">
                            Registration</a>
                    </p>

                    </form>
                </div>
            </div>
        </div>
    </section>
                
@stop