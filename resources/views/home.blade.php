@extends('layouts.app')

@section('title', 'LUAssist  - An Online Quiz Management System')
@section('content')
    <main>
        <style>
            p.home-lead {
                font-size: 26px;
            }

            h1.home-title {
                font-size: 72px;
            }
            .logo {
                background-image: url('/assets/img/quiz.jpg');
                background-position: center;
                background-size: cover;
                height: 400px;
                width: 400px;
            }
        </style>
        
        <div class="jumbotron bg">
            <div class="container">
                <div class="row">
                    
                    {{-- <div class="col-lg-6 col-md-12 text-left mr-auto">
                        <img src="/assets/img/quiz.jpg" alt="" class="img-fluid">
                         <div><h4 class="lead text-center" style="margin-boo: -8rem; font-size: 2rem;">
                            An Online Quiz Platform for the Lebanese University
                        </h4></div>
                       
                    </div> --}}

                    @if (Auth::guest())
                    <div class="layer"></div>
                    <div class="col-lg-5 col-md-12 col-sm-12" style="margin-left: 100vh">
                        <div class="card" style="margin-top: 50px" >
                            <div class="card-body">
                                <p class="text-center text-muted">
                                    Already have an account and just want to join to a class?
                                    <a href="">Click here</a> to join!
                                </p>
                                <hr>
                                <form method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <div class="form">
                                            <input name="n_given" id="n_given" type="text" placeholder="Given name" class="form-control mb-2" value="{{ old('n_given') }}">
                                            <input name="n_middle" id="n_middle" type="text" placeholder="M.I." class="form-control mb-2" value="{{ old('n_middle') }}">
                                            <input name="n_family" id="n_family" type="text" placeholder="Family name" class="form-control mb-2" value="{{ old('n_family') }}">
                                            <input name="n_ext" id="n_ext" type="text" placeholder="Ext." class="form-control mb-2" value="{{ old('n_ext') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input name="usr" id="usr" type="text" class="form-control {{ $errors->has('usr') ? 'is-invalid' : '' }}" value="{{ old('usr') }}">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('usr') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input name="password" id="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                        <small class="form-text text-muted">At least 8 characters</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password_confirmation" required>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Class Code</label>
                                        <input name="class_code" id="class_code" type="text" class="form-control {{ $errors->has('class_code') ? 'is-invalid' : '' }}" value="{{ old('class_code') }}">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('class_code') }}
                                        </div>
                                        <small class="form-text text-muted">Ask your teacher for the code</small>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btnstyle">Register</button>
                                        <small class="form-text text-muted text-center">By clicking "Register", you agree to our terms of service and privacy policy.</small>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-12 footerparagraph">
                    <h3 class="text-muted">LUAssist ONLINE QUIZ</h3>
                    <p class="text-muted">Check out LUAssist's online quiz! It's a free tool that you can use to evaluate your candidates, employees, or students. With automated scoring and reporting, analyzing the results is a breeze.</p>
                </div>

                <div class="footerlinks">
                    <ul class="list-unstyled">
                        <li><a href="">Home</a></li>
                        <li><a href="/contactus">Contact us</a></li>
                    </ul>
                </div>

            </div>
            
        </div>
    </footer>
      
      
    
@endsection