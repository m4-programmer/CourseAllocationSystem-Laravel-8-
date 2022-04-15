@extends('layouts.app')

@section('content')
<div class="limiter">
        <div class="container-login100" >

            <div class="wrap-login100" >

                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/img-01.png" style="margin-top: -50px; padding: 10px" alt="IMG">
                </div>

                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form" style="margin-top: -50px; padding: 10px" >
                    @csrf
                    <span class="login100-form-title">
                        User Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                         <input  id="email" type="email" class="input100  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Email" required autocomplete="email" autofocus>
                        
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                         
                    </div>
                    @error('email')
                                    <span class="" role="alert" style="margin-top: 5px;color:red;margin-bottom: 5px">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
               
                    <div class="wrap-input100 validate-input" data-validate = "Password is required" ">
                        
                    <input id="password" type="password" class="input100  @error('password') is-invalid @enderror" name="password" placeholder="Enter Password" required autocomplete="current-password">

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                       
                                
                    </div>
                    @error('password')
                                    <span class="" role="alert" style="margin-top: 5px;color:red;margin-bottom: 5px">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Username / Password?
                        </a>
                    </div>
                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                    <div class="text-center p-t-36">
                        <a class="txt2" href="{{ route('register') }}">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
