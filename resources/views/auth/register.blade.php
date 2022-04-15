@extends('layouts.app')

@section('content')
<div class="limiter">
        <div class="container-login100" >
            <div class="wrap-login100" >
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/img-01.png" style="margin-top: 50px; padding: 10px" alt="IMG">
                </div>

                <form method="POST" action="{{ route('register') }}" class="login100-form validate-form" style="margin-top: -100px; padding: 10px" enctype="multipart/form-data" >
                    @csrf
                    <span class="login100-form-title">
                        User Registration
                    </span>


                    <!-- Name Input -->
                    <div class="row ">
                        
                                @error('role_as')
                                    <span class="" role="alert" style="margin-top: 5px;color:red;margin-bottom: 5px">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('position')
                                    <span class="" role="alert" style="margin-top: 5px;color:red;margin-bottom: 5px">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <label for="username" class="col-md-12 col-form-label text-md-end h5">{{ __('Name ') }}</label>
                    <div class="col-md-12">
                    <div class="wrap-input100 validate-input" data-validate = "Valid name is required: ex@abc.xyz">

                         <input  id="name" type="name" class="input100  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter Name" autofocus>
                        
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                         
                    </div>
                    @error('name')
                                    <span class="" role="alert" style="margin-top: 5px;color:red;margin-bottom: 5px">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    </div>
                    <!-- End of Name Input -->
                    <h2></h2>

                    <!-- Email Input -->
                    <div class="row ">
                    <label for="username" class="col-md-12 col-form-label text-md-end h5" style="margin-left: 13px">{{ __('Email ') }}</label>
                    <div class="col-md-12">
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                         <input  id="email" type="email" class="input100  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Enter Email" autocomplete="email" autofocus>
                        
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
                    </div>
                    </div>      
                    <!-- End of Email Input -->

                    <!-- Username Input -->
                    <div class="row ">
                            <label for="username" style="margin-left: 13px" class="col-md-12 col-form-label text-md-end h5">{{ __('Username ') }}</label>

                            <div class="col-md-12">
                                 <div class="wrap-input100 validate-input" data-validate = "Password is required" >
                                <input id="username" type="text" class="input100  @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
                                 <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <header>
                            
                        </header>

                    <!-- End of Username Input -->

                    <!-- Password Input -->
                    <div class="row ">
                    <label for="password" class="col-md-12 col-form-label text-md-end h5" style="margin-left: 13px">{{ __('Password ') }}</label>
                    <div class="col-md-12">
                    <div class="wrap-input100 validate-input" data-validate = "Password is required" >
                        
                    <input id="password" type="password" placeholder="Enter Password" class="input100  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                    </div>
                </div>

                     <!-- End of Password Input -->    
                     <!-- Confirm Passwor Input -->
                     <div class="row ">
                            <label for="password-confirm" style="margin-left: 13px" class="col-md-12 h5 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <div class="wrap-input100 validate-input" data-validate = "Password is required" >
                                <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password">
                                <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                            </div>
                        </div>
                    </div>


                     <!-- End of Comfirm Password Input --> 
                      <!-- Upload Picture Input -->
                     <!-- <div class="row ">
                            <label for="password-confirm" style="margin-left: 13px" class="col-md-12 h5 col-form-label text-md-end">{{ __('Upload Picture') }}</label>

                            <div class="col-md-12">
                                <div class="wrap-input100 validate-input" data-validate = "Picture is required" >
                                <input id="picture" type="file" class="" name="profile_pics" required >
                            </div>
                        </div>
                    </div> -->
                    <!-- End of Upload Picture Input -->
                     <!-- Beginning of Roles Input -->
                     <div class="row mb-3">
                            <label for="roles" style="margin-left: 13px" class="col-md-12 col-form-label h5 text-md-end">{{ __('Roles') }}</label>

                            <div class="col-md-12">
                                <select class="input100" id="roles" name="role_as">
                                    <option value="0">Student</option>
                                    <option value="1" id="lect">Lecturer</option>
                                </select>
                            </div>
                        </div>

                     <!-- End of Roles Input -->

                     <!-- Beginning of Position Input --> 
                      <div class="row mb-3"  id="change">
                            <label for="position" style="margin-left: 13px" class="col-md-12 h5 col-form-label text-md-end">{{ __('Position') }}</label>

                            <div class="col-md-12 " >
                                <select class="input100 " name="position" >
                                     <option value="Junior Lecturer">Junior Lecturer</option>
                                    <option value="Senior Lecturer">Senior Lecturer</option>
                                   
                                </select>
                            </div>
                        </div>


                     <!-- End of Position Input -->     
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Register
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
                        <a class="txt2" href="{{ route('login') }}">
                            Already have an Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
@endsection
