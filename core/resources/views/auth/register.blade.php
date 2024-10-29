@extends('loginlayout')
@section('css')

@stop
@section('content')
                        <div class="text mb-4">
                            <h4>Create a new Banking Account.</h4>
                        </div>



                        <div class="form-holder mt-4">
                            @if ($set->registration == 1)
                                <form action="{{ route('submitregister') }}" enctype="multipart/form-data"
                                    method="POST" id="signup">
                                    @csrf
                                    <p class=""
                                        style="font-family: 'Gothic A1', sans-serif; font-weight: lighter; color: #012169; clear: both;">
                                        <big style="font-size: 22px; font-weight: 600">Personal Info</big>
                                    </p>
                                    <div class="form-group row">

                                        <div class="col-sm-3" style="height: 3.75rem;">
                                            @if ($errors->has('name'))
                                                <p style="color: #DC1414">
                                                    {{ $errors->first('name') }}
                                                </p>
                                            @endif
                                            <input type="text" name="name"
                                                style="height: 3.75rem; border-radius: 0px"
                                                class="reg-form form-control" placeholder="Firstname *" required />
                                        </div>
                                        <div class="col-sm-3" style="height: 3.75rem;">
                                            <input type="text" name="lastname"
                                                style="height: 3.75rem; border-radius: 0px"
                                                class="reg-form form-control" placeholder="Lastname" required />
                                        </div>
                                        <div class="col-sm-4" style="height: 3.75rem;">
                                            @if ($errors->has('username'))
                                                <p style="color: #DC1414">
                                                    {{ $errors->first('username') }}
                                                </p>
                                            @endif
                                            <input type="text" name="username" id="u_username"
                                                style="height: 3.75rem; border-radius: 0px"
                                                class="reg-form form-control" placeholder="Username *" required />
                                        </div>
                                        <div class="col-sm-2" style="height: 3.75rem;">
                                            <select name="gender" placeholder="select" class="form-control"
                                                style=" height: 3.75rem; border-radius: 0px!important;" required>
                                                <option value=""
                                                    style="background-color: grey; color: #fff!important; font-weight: bold;"
                                                    selected="selected">GENDER *</option>
                                                <option>-----</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6" style="height: 3.75rem;">
                                            <input type="text" name="address"
                                                style="height: 3.75rem; border-radius: 0px"
                                                class="reg-form form-control" placeholder="Address *" required />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <select onchange="set_country(this,country,city_state,phonec)"
                                                size="1" name="region" class="reg-form form-control"
                                                style=" height: 3.75rem; border-radius: 0px" required>
                                                <option value="" selected="selected">SELECT REGION *</option>
                                                <option value=""></option>
                                                <script type="text/javascript">
                                                    setRegions(this);
                                                </script>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select name="country" size="1" disabled="disabled"
                                                onchange="set_city_state(this,city_state),set_phonec(this,phonec)"
                                                class="reg-form form-control"
                                                style=" height: 3.75rem; border-radius: 0px" required></select>
                                        </div>
                                        <div class="col-sm-4">
                                            <select name="city_state" size="1" disabled="disabled"
                                                onchange="print_city_state(country,this)"
                                                class="reg-form form-control"
                                                style=" height: 3.75rem; border-radius: 0px" required></select>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="zip_code"
                                                style="height: 3.75rem; border-radius: 0px"
                                                class="reg-form form-control" placeholder="ZIP code *" required />
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <div class="col-sm-6" style="height: 3.75rem;">
                                            @if ($errors->has('email'))
                                                <p style="color: #DC1414">
                                                    {{ $errors->first('email') }}
                                                </p>
                                            @endif
                                            <input type="email" name="email" id="u_email"
                                                style="height: 3.75rem; border-radius: 0px"
                                                class="reg-form form-control" placeholder="Email address *"
                                                required />
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-sm-3">
                                            <select name="phonec" size="1" disabled="disabled"
                                                onchange="print_phonec(country,this)" class="reg-form form-control"
                                                style=" height: 3.75rem; border-radius: 0px" required></select>
                                        </div>

                                        <div class="col-sm-3" style="height: 3.75rem;">
                                            <input type="number" name="phonexx"
                                                style="height: 3.75rem; border-radius: 0px"
                                                class="reg-form form-control" placeholder="Phone number *" required />
                                        </div>
                                    </div>



                                    <div class="form-group row" id="u_password_err">

                                        <div class="col-sm-" style="height: 3.75rem;">
                                            @if ($errors->has('password'))
                                                <p style="color: #DC1414">
                                                    {{ $errors->first('password') }}
                                                </p>
                                            @endif
                                            <div class="input-wrapper">

                                                <input type="password" name="password"
                                                    style="height: 3.75rem; border-radius: 0px"
                                                    class="reg-form form-control" placeholder="Password *"
                                                    id="u_password" required />
                                                <span class="input-group-text toggle-password uil uil-eye"
                                                    id="togglePassword"></span>
                                            </div>

                                        </div>



                                    </div>



                                    <!--<div class="col-sm-10">
                          <p style="color: #000; font-weight: lighter; font-size: 18px"><span style=""><img src="https://central-ab.com/temp/images/icons/info_icon_2x.svg" style="height: 1.125rem; width: 1.125rem; margin-left: 15px; margin-right: 5px"></span> How we identify you
                            <div style="margin-left: 5%; margin-top: -15px"><small>Central Alpha Bank, like all financial institutions, is required by law to obtain, verify and record information that identifies each customer that opens an account with us. When you open an account with us, we will ask you for your name, address and other information that will allow us to identify you.</small></div>
                          </p>
                        </div>-->
                                    <!--
                          <div class="col-sm-12" style="margin-top: 15px">
                            <p class="" style="font-family: Arial, sans-serif; font-weight: lighter; color: #000; clear: both;">
                            <big>Do you have a dual citizenship? *</big>
                            </p>
                          </div>

                          <div class="col-sm-12" style="">
                            <p class="" style="font-family: Arial, sans-serif; font-weight: lighter; color: #000; clear: both;">
                            <label class="fancy-radio custom-color-green">
                              <input name="dual_citizen" required="" value="yes" type="radio"><span style="font-family: 'Gothic A1', sans-serif;"><i></i><b>Yes</b></span></label>

                            <label class="fancy-radio custom-color-green">
                              <input name="dual_citizen" required="" value="no" type="radio"><span style="font-family: 'Gothic A1', sans-serif;"><i></i><b>No</b></span></label>
                            </p>
                          </div>

                          <div class="form-group row">
                            <label id="reg-font2" for="email" class="col-sm-10 col-form-label col-form-label-sm">Country of dual citizenship</label>
                          <div class="col-sm-3" style="height: 3.75rem;">
                            <input type="text" name="dual_citizen_country" style="height: 3.75rem; border-radius: 0px" class="reg-form form-control" placeholder="Dual citizen country" />
                          </div>

                        </div>
-->
                                    <!--<div class="form-group row">
                          <label id="reg-font2" for="email" class="col-sm-12 col-form-label col-form-label-sm">Date of Birth *</label>
                          <div class="col-sm-3" style="height: 3.75rem;">
                              @if ($errors->has('dob'))
<p style="color: #DC1414">
                              {{ $errors->first('dob') }}
                              </p>
@endif
                            <input type="text" name="dob" style="height: 3.75rem; border-radius: 0px" class="reg-form form-control" placeholder="YYYY-MM-DD"/>
                          </div>
                        </div>

                       <!-- <div class="form-group row">
                          <label id="reg-font2" for="email" class="col-sm-12 col-form-label col-form-label-sm">Choose Preferred Currency *</label>
                          <div class="col-sm-3" style="height: 3.75rem;">
                            <select style="height: 3.75rem; border-radius: 0px" class="form-control bfh-currencies" name="currency">

                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="USD">USD</option>

                            </select>
                          </div>
                        </div>-->

                                    <hr style="border: 1px solid #d6d6d6; margin-top: 4%; margin-bottom: 3%">
                                    <p class=""
                                        style="font-family: 'Gothic A1', sans-serif; font-weight: lighter; color: #012169; clear: both;">
                                        <big style="font-size: 22px; font-weight: 600">Security Info</big>
                                    </p>

                                    <div class="form-group row">
                                        <div class="col-sm-4" style="height: 3.75rem;">
                                            @if ($errors->has('pin'))
                                                <p style="color: #DC1414">
                                                    {{ $errors->first('pin') }}
                                                </p>
                                            @endif
                                            <input type="password" name="pin"
                                                style="height: 3.75rem; border-radius: 0px"
                                                class="reg-form form-control" maxlength="4"
                                                placeholder="4 Digit Pin *" required />
                                        </div>

                                        <div class="col-sm-4" style="height: 3.75rem;">
                                            <input type="password" name="verify_pin"
                                                style="height: 3.75rem; border-radius: 0px"
                                                class="reg-form form-control" maxlength="4"
                                                placeholder="Re-enter Pin *" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3" style="height: 3.75rem;">
                                            <select name="account_type" placeholder="select" class="form-control"
                                                required style=" height: 3.75rem; border-radius: 0px!important;">
                                                <option value=""
                                                    style="background-color: grey; color: #fff!important; font-weight: bold;"
                                                    selected="selected">ACCOUNT TYPE *</option>
                                                <option>-----</option>
                                                <option value="Checking Account">Checking Account</option>
                                                <option value="Current Account">Current Account</option>
                                                <option value="Business Account">Business Account</option>
                                                <option value="Cooperate Account">Cooperate Account</option>
                                                <option value="Fixed Deposit Account">Fixed Deposit Account</option>
                                                <option value="Brokerage Account">Brokerage Account</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3" style="height: 3.75rem;">
                                            <select name="currency" placeholder="select" class="form-control"
                                                required style=" height: 3.75rem; border-radius: 0px!important;">
                                                <option value=""
                                                    style="background-color: grey; color: #fff!important; font-weight: bold;"
                                                    selected="selected">CURRENCY TYPE *</option>
                                                <option value="$">USD</option>
                                                <option value="€">EURO</option>
                                                <option value="£">POUNDS</option>
                                                <option value="¥">CNY</option>
                                                <option value="¥">JPY</option>
                                                <option value="Rp">INR</option>
                                                <option value="RM">MYR</option>
                                                <option value="฿">THB</option>
                                                <option value="₩">KRW</option>
                                                <option value="Php">PHP</option>
                                                <option value="Rp">IDR</option>
                                                <option value="៛">KHR</option>


                                            </select>
                                        </div>
                                    </div>




                                    <hr style="border: 1px solid #d6d6d6; margin-top: 4%; margin-bottom: 3%">
                                    <p class=""
                                        style="font-family: 'Gothic A1', sans-serif; font-weight: lighter; color: #012169; clear: both;">
                                        <big style="font-size: 22px; font-weight: 600">Verify Your Identity</big>
                                    </p>



                                    <p>We'er required by law to collect your Social Security Number / TIN. </p>
                                    <div class="container">

                                        <div class="form-group row">
                                            <div class="col-md-2 mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-lock text-primary">
                                                    <rect x="3" y="11" width="18" height="11" rx="2"
                                                        ry="2"></rect>
                                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                                </svg>
                                            </div>
                                            <div class="col-md-10">
                                                <h6>Security in mind</h6>
                                                We use your SSN or TIN to help keep your account safe and secure.
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-2 mb-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-credit-card text-primary">
                                                    <rect x="1" y="4" width="22" height="16" rx="2"
                                                        ry="2"></rect>
                                                    <line x1="1" y1="10" x2="23"
                                                        y2="10"></line>
                                                </svg>
                                            </div>
                                            <div class="col-md-10">
                                                <h6>Only for what you need</h6>
                                                Occasionally we'll need to provide you with tax documents, which require
                                                your SSN.
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-2 mb-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit text-primary">
                                                    <path
                                                        d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                    </path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="col-md-10">
                                                <h6>No credit score impact</h6>
                                                Applying for Ibank Account will never impact your credit score
                                            </div>
                                        </div>

                                    </div>





                                    <div class="form-group row">
                                        <div class="col-sm-4" style="height: 3.75rem;">
                                            @if ($errors->has('ssn'))
                                                <p style="color: #DC1414">
                                                    {{ $errors->first('ssn') }}
                                                </p>
                                            @endif
                                            <input type="text" name="ssn"
                                                style="height: 3.75rem; border-radius: 0px"
                                                class="reg-form form-control" maxlength="10" placeholder="SSN/TIN *"
                                                required />
                                        </div>
                                        <div class="col-sm-4" style="height: 3.75rem;">
                                            @if ($errors->has('ssn_confirmation'))
                                                <p style="color: #DC1414">
                                                    {{ $errors->first('ssn_confirmation') }}
                                                </p>
                                            @endif
                                            <input type="text" name="ssn_confirmation"
                                                style="height: 3.75rem; border-radius: 0px"
                                                class="reg-form form-control" maxlength="10" placeholder="SSN/TIN *"
                                                required />
                                        </div>
                                    </div>

                                    <hr style="border: 1px solid #d6d6d6; margin-top: 4%; margin-bottom: 3%">
                                    <p class=""
                                        style="font-family: 'Gothic A1', sans-serif; font-weight: lighter; color: #012169; clear: both;">
                                        <big style="font-size: 22px; font-weight: 600">Employment & finances</big>
                                    </p>

                                    <div class="form-group row">
                                        <div class="col-sm-4" style="height: 3.75rem;">
                                            <select name="sources" placeholder="select" class="form-control" required
                                                style=" height: 3.75rem; border-radius: 0px!important;">
                                                <option value=""
                                                    style="background-color: grey; color: #fff!important; font-weight: bold;"
                                                    selected="selected">Source of income *</option>
                                                <option>-----</option>
                                                <option value="Employment Income">Employment Income</option>
                                                <option value="Inheritance Or Trust">Inheritance or Trust</option>
                                                <option value="Investment Income">Investment Income</option>
                                                <option value="Retirement Income">Retirement Income</option>
                                                <option value="Social Security">Social Security</option>
                                                <option value="Unemployment">Unemployment</option>
                                                <option value="Household Income">Household Income / Homemaker</option>
                                            </select>
                                        </div>
                                    </div>


                                    <hr style="border: 1px solid #d6d6d6; margin-top: 4%; margin-bottom: 3%">
                                    <p class=""
                                        style="font-family: 'Gothic A1', sans-serif; font-weight: lighter; color: #012169; clear: both;">
                                        <big style="font-size: 22px; font-weight: 600">Upload Passport
                                            Photo</big><small>(Accepted formats:png, jpg.)*</small>
                                    </p>

                                    <div class="form-group row">
                                        <div class="col-sm-4" style="height: 3.75rem;">

                                            <input type="file" name="image"
                                                style="height: 3.75rem; border-radius: 0px"
                                                class="reg-form form-control" accept="image/*" required>
                                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000">

                                        </div>
                                    </div>



                                    <hr style="border: 1px solid #d6d6d6; margin-top: 4%; margin-bottom: 3%">
                                    <div class="form-group row" style="padding-left: 15px">
                                        <div class="col-sm-8"
                                            style=" background-color: #fef3eb; border: .0625rem solid #ea7600; padding-top: 10px; padding-bottom: 10px">
                                            <div style="">

                                                <span style="font-size: 14px">You won't be able to edit some of this
                                                    section later. So please review your information before you
                                                    continue.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid #d6d6d6; margin-top: 4%; margin-bottom: 3%">

                                    <div class="form-group row" style="margin-top: 5%">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-block w-btn" id="signup-btn">Open
                                                Account</button>
                                            <!-- <input type="submit" name="register" value="Enroll"> -->
                                        </div>
                                    </div>

                                </form>
                            @else
                                <div class="text-dark text-center mt-2 mb-3"><strong>We are not currenctly accepting
                                        new users</strong></div>
                            @endif
                        </div>

@stop