@extends('layouts.app')

@section('content')

<div class="page-header">
    <div class="page-header-image" style="background-image:url(assets/images/login.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="header">
                        <div class="logo-container">
                            <img src="assets/images/logo.svg" alt="">
                        </div>
                        <h5>Log in</h5>
                    </div>
                    <div class="content">                                                
                        <div class="input-group input-lg">
                             <input id="email" type="email" placeholder="Email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group input-lg">
                           <input id="email" type="password" placeholder="Password"  class="form-control @error('email') is-invalid @enderror" name="password" value="{{ old('email') }}" required autocomplete="email" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <input type="submit" value="SIGNIN"  class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">
                      
                        <h6 class="m-t-20"> Don't have an account? <a class="nav-link " href="{{ route('register') }}">SIGN UP</a></h6>
                    </div>
                </form>
            </div>
        </div>
    </div>
   




























































@endsection
