@extends('loginlayout')
@section('css')

@stop
@section('content')
                        <div class="text">
                            <h4>Login internet banking portal.</h4>
                        </div>

                        <div class="form-holder" style="margin: auto; width: 80%;">

                            <form class="form-wrap" action="{{ route('submitlogin') }}" method="post"
                                 >
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        @if ($errors->has('acct_no'))
                                            <p style="color: #DC1414;">
                                                {{ $errors->first('acct_no') }}
                                            </p>
                                        @endif
                                        <div class="form-group">
<label>Account Number: </label>
                                            <input type="number" name="acct_no" placeholder="Account Number"
                                                id="email_username" required>
                                        </div>

                                        @if ($errors->has('password'))
                                            <p style="color: #DC1414;">
                                                {{ $errors->first('password') }}
                                            </p>
                                        @endif
                                        <div class="form-group">
                                            <label>Password: </label>
                                            <div class="input-wrapper">
                                                <input type="password" name="password" placeholder="Password"
                                                    id="u_password" required>
                                                <span class="input-group-text toggle-password uil uil-eye"
                                                    id="togglePassword"></span>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="checkbox style3">
                                                <input type="checkbox" id="test_1">
                                                <label for="test_1">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group text-end mb-4">
                                            <a href="{{ route('user.password.request') }}" class="link style1">Forgot
                                                Password?</a>
                                        </div>
                                        <div class="col-sm-12-x mt-4">
                                            <div class="form-group">
                                                <button class="btn btn-block w-btn" id="login-btn">
                                                    Login Now
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-12-x text-center-x">
                                            <p class="mb-0">Don’t Have an Account? <a class="link style1"
                                                    href="{{route('register')}}">Create Account</a></p>
                                        </div>
                                    </div>
                            </form>
                            <br />
                            <br />




                        </div>
                    </div>

@stop
