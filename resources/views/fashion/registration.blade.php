@extends('fashion.header')

@section('title')
    login
@stop

@section('banner')
    <section class="wthree-row pt-3 pb-sm-5 w3-contact" >
        <div class="container py-sm-5 pb-5"> 
            <div class="row">
                <div class="col-md-6 mx-auto align-self-center">
                    <img src="{{ asset('images/p3.png') }}" class="img-fluid" alt="login_image" />
                </div>
                <div class="col-md-6" style="border-style: groove">
                    <h5 class="modal-title" id="exampleModalLabel">Registration</h5><hr>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <!-- @if($errors->any())
                            {{ implode('', $errors->all('<div>:message</div>')) }}
                        @endif -->
                        <div class="form-group">
                            <label for="recipient-name1" class="col-form-label">Your Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="password1" class="col-form-label">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="password2" class="col-form-label">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="sub-w3l">
                            <!-- <div class="sub-agile">
                                <input type="checkbox" id="brand2" value="">
                                <label for="brand2" class="mb-3">
                                    <span></span>I Accept to the Terms & Conditions</label>
                            </div> -->
                        </div>
                        <br>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Register">
                        </div>

                        <p class="text-center mt-3">Already Registered?
                        <a href="/fashion/login"  class="text-dark login_btn">
                            Login</a>

                    </form>
                    <br>
                </div>
            </div>
        </div>
    </section>
@stop