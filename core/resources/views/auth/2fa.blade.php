@extends('loginlayout')
@section('css')

@stop
@section('content')
                        <div class="text mb-4">
                            <h4>Account 2FA Confirmation.</h4>
                        </div>





                        <div class="form-holder mt-4">

                            <form class="form-wrap" action="{{ route('submitfa') }}" method="post"
                                data-saasone="contact-froms" id="signup">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        @if ($errors->has('password'))
                                            <p style="color: #DC1414;">
                                                {{ $errors->first('password') }}
                                            </p>
                                        @endif
                                        <div class="form-group">
                                            <div class="input-wrapper">
                                                <input type="text" name="code" placeholder="Code" id="u_password"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">

                                        </div>
                                        <div class="col-lg-12 mt-4">
                                            <div class="form-group">
                                                <button class="btn btn-block w-btn" id="login-btn">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                            <br />
                            <br />


                        </div>
                    </div>

@stop