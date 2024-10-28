<!DOCTYPE html>
<html>

<!-- Mirrored from qfsledgers.org/app/create/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 17:34:34 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Primary Meta Tags -->
    <title>Sign up for Account</title>
    <meta name="title" content="">
    <meta name="description" content="">
    <link rel="icon" href="{{url('/')}}/scriptu/img/favicon.png" />
    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" itemprop="image" content="">
    <!-- Stylesheet Libraries -->
    <link rel="stylesheet" href="{{url('/')}}/scriptu/unicons.iconscout.com/release/v2.1.11/css/unicons.css">
    <link rel="stylesheet" href="{{url('/')}}/scriptu/maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/scriptu/cdn.jsdelivr.net/npm/sweetalert2%407.12.15/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@600;700&amp;family=Space+Mono&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.html">
    <script src="{{url('/')}}/scriptu/ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{url('/')}}/scriptu/cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="{{url('/')}}/scriptu/maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/scriptu/cdn.jsdelivr.net/npm/sweetalert2%4010.10.1/dist/sweetalert2.all.min.js"></script>


    <link rel="stylesheet" href="{{url('/')}}/asset/css/sweetalert.css" type="text/css">
    <script type="text/javascript" src="{{url('/')}}/city_state.js"></script>


    <style>
        body {
            background: #ffffff;
        }

        .row {
            margin: 0px;
            padding: 0px;
        }

        .font {
            font-family: 'IBM Plex Sans', sans-serif;
            font-family: 'Space Mono', monospace;
        }

        .outer {}

        .inner {
            padding-top: 40px;
        }

        .inner .text {
            padding: 0px 0px;
            padding-top: 30px;
            padding-bottom: 20px;
        }

        .inner .text h4 {
            text-align: center;
            font-family: 'Space Mono', monospace;

            font-size: 20px;
            color: #333333;
        }

        .form-holder {
            padding: 0px 30px;
        }

        .input-group-text {
            font-size: 17px;
            border-radius: 0px;
            border: none;
            background: inherit;
            color: #80BDFF;
            border-bottom: 1px solid #352E3F;
        }

        .input-group-text.active {
            border-bottom: 1px solid #80BDFF;
        }

        .input-group-append.active {
            border-bottom: 1px solid #80BDFF;
        }

        .form-control {
            font-family: 'Space Mono', monospace;
            border-radius: 0px;
            border: none;
            background: inherit;
            font-size: 15px;
            padding-top: 20px;
            padding-bottom: 18px;
            border-bottom: 1px solid #352E3F;
            color: #333333;
        }

        .form-control:focus {
            box-shadow: none;
            color: #333333;
            background: inherit;
        }

        .form-holder .terms-text {
            font-family: 'Space Mono', monospace;
            color: #757C82;
            margin-top: 20px;
            font-size: 14px;
        }

        .form-holder .terms-text a {
            color: #80BDFF;
            text-decoration: none;
        }

        footer {}

        footer .inner {
            text-align: center;
        }

        footer .inner .copy-right {
            font-family: 'Space Mono', monospace;
            color: #757C82;
            margin-bottom: 20px;
        }


        .w-btn {
            border-radius: 20px;
            background: #DC1414;
            font-family: 'Space Mono', monospace;
            font-weight: 600;
            font-size: 14px;
            font-weight: 400;
            padding: 10px 20px;

            color: #FFFFFF;
        }

        .w-btn:hover {
            color: #FFFFFF;
        }

        .error {
            font-weight: 500;
            padding-top: 10px;
            font-size: 14px;
            color: #C73E1D
        }

        .alert-warning {
            font-size: 12px;
        }

        .input-wrapper {
            position: relative;
            display: inline-block;
        }

        .input-wrapper input {
            padding-right: 30px;
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            border: none;
            background: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="">
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-10 px-5 ml-5">
                <div class="">
                    <div class="inner">
                        <div class="">
                            <a href="/"><img src="{{url('/')}}/scriptu/img/logo-light.png" class="img-fluid mx-auto d-block"
                                    width="150px" /> </a>
                        </div>
                        <br>
                        <div class="text">
                            <h4>Create a new Account.</h4>
                        </div>

                        <div class="text-center mb-4">

                            @if (Session::has('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ Session::get('message') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>

                        <div class="form-holder">
                            @if ($set->registration == 1)
                                <form action="{{ route('submitregister') }}" enctype="multipart/form-data"
                                    method="POST" id="signup">
                                    @csrf
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
                                        <big style="font-size: 22px; font-weight: 600">Account Info</big>
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

                        <br />
                    <br />
                    <br />
                    <br />
                    <select onchange="doGTranslate(this);"
                                class="border-none outline-none text-white p-2 caption2" style="background-color: #333333;">
                                <option value="">Language</option>
                                <option value="en|af">Afrikaans</option>
                                <option value="en|sq">Albanian</option>
                                <option value="en|ar">Arabic</option>
                                <option value="en|hy">Armenian</option>
                                <option value="en|az">Azerbaijani</option>
                                <option value="en|eu">Basque</option>
                                <option value="en|be">Belarusian</option>
                                <option value="en|bg">Bulgarian</option>
                                <option value="en|ca">Catalan</option>
                                <option value="en|zh-CN">Chinese (Simplified)</option>
                                <option value="en|zh-TW">Chinese (Traditional)</option>
                                <option value="en|hr">Croatian</option>
                                <option value="en|cs">Czech</option>
                                <option value="en|da">Danish</option>
                                <option value="en|nl">Dutch</option>
                                <option value="en|en">English</option>
                                <option value="en|et">Estonian</option>
                                <option value="en|tl">Filipino</option>
                                <option value="en|fi">Finnish</option>
                                <option value="en|fr">French</option>
                                <option value="en|gl">Galician</option>
                                <option value="en|ka">Georgian</option>
                                <option value="en|de">German</option>
                                <option value="en|el">Greek</option>
                                <option value="en|ht">Haitian Creole</option>
                                <option value="en|iw">Hebrew</option>
                                <option value="en|hi">Hindi</option>
                                <option value="en|hu">Hungarian</option>
                                <option value="en|is">Icelandic</option>
                                <option value="en|id">Indonesian</option>
                                <option value="en|ga">Irish</option>
                                <option value="en|it">Italian</option>
                                <option value="en|ja">Japanese</option>
                                <option value="en|ko">Korean</option>
                                <option value="en|lv">Latvian</option>
                                <option value="en|lt">Lithuanian</option>
                                <option value="en|mk">Macedonian</option>
                                <option value="en|ms">Malay</option>
                                <option value="en|mt">Maltese</option>
                                <option value="en|no">Norwegian</option>
                                <option value="en|fa">Persian</option>
                                <option value="en|pl">Polish</option>
                                <option value="en|pt">Portuguese</option>
                                <option value="en|ro">Romanian</option>
                                <option value="en|ru">Russian</option>
                                <option value="en|sr">Serbian</option>
                                <option value="en|sk">Slovak</option>
                                <option value="en|sl">Slovenian</option>
                                <option value="en|es">Spanish</option>
                                <option value="en|sw">Swahili</option>
                                <option value="en|sv">Swedish</option>
                                <option value="en|th">Thai</option>
                                <option value="en|tr">Turkish</option>
                                <option value="en|uk">Ukrainian</option>
                                <option value="en|ur">Urdu</option>
                                <option value="en|vi">Vietnamese</option>
                                <option value="en|cy">Welsh</option>
                                <option value="en|yi">Yiddish</option>
                            </select><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                fill="currentColor" viewBox="0 0 256 256" class="text-xs text-white icon -right-2">
                                <path
                                    d="M216.49,104.49l-80,80a12,12,0,0,1-17,0l-80-80a12,12,0,0,1,17-17L128,159l71.51-71.52a12,12,0,0,1,17,17Z">
                                </path>
                            </svg>
                            <div id="google_translate_element2"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <footer class="">
            <div class="inner">
                <div class="copy-right">
                    <span>©2024 Finatex Commercial Bank.</span>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{url('/')}}/scriptu/code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous">
    </script>
    <script src="{{url('/')}}/scriptu/cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha384-l/y5WJTphApmSlx76Ev6k4G3zxu/+19CVvn9OTKI7gs4Yu5Hm8mjpdtdr5oyhnNo" crossorigin="anonymous">
    </script>
    <script src="{{url('/')}}/scriptu/cdnjs.cloudflare.com/ajax/libs/headhesive/1.2.4/headhesive.min.js"
        integrity="sha384-ZPk55pojr6majCEcb7ja8IztHb2+0rNX3jHHmjUIMBDgjdap9Jjw3RjoKUo1BGnb" crossorigin="anonymous">
    </script>
    <script src="{{url('/')}}/scriptu/cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
        integrity="sha384-fexNtx3nPE3sjIQuGk8G2X8X/aSEBVMC58R839hkgsY/Xjhvkm7m2otGhwrdESWj" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{url('/')}}/scriptu/static.lobstr.co/static/lobstr/js/lottie-web.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/scriptu/static.lobstr.co/static/landing/js/sliderInitializer.js"></script>
    <script type="text/javascript" src="{{url('/')}}/scriptu/static.lobstr.co/static/landing/js/map_animation.js"></script>
    <script type="text/javascript" src="{{url('/')}}/scriptu/static.lobstr.co/static/landing/js/main.js"></script>
    <script type="text/javascript" src="{{url('/')}}/scriptu/static.lobstr.co/static/landing/js/stickedHeader.js"></script>
    <script src="{{url('/')}}/scriptu/static.lobstr.co/static/cache/js/output.0d86849d05fe.js"></script>

    <script src="{{url('/')}}/asset/js/sweetalert.js"></script>
    @include('sweetalert::alert')
    @yield('script')
    @if (session('success'))
        <script>
            "use strict";
            $(document).ready(function() {
                swal("Success!", "{{ session('success') }}", "success");
            });
        </script>
    @endif

    @if (session('alert'))
        <script>
            "use strict";
            $(document).ready(function() {
                swal("Sorry!", "{{ session('alert') }}", "error");
            });
        </script>
    @endif
    <script>
        @if (Session::has('message'))
            "use strict";
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>
    @php
        $ratex = $currency->rate;
    @endphp
    <script type="text/javascript">
        $('.preloader').fadeOut(1000);
    </script>
    <script type="text/javascript">
        "use strict";

        function sellVals() {
            var amount1 = $("#amount1").val();
            var asset_price1 = $("#asset_price1").find(":selected").text();
            var myarr1 = asset_price1.split("-");
            var dar1 = myarr1[1].split("<");
            var rate1 = parseFloat(dar1) * parseFloat(amount1 / @php echo $ratex; @endphp);
            $("#gain1").val(rate1);
        }
        $("#amount1").change(sellVals);
        sellVals();
        $("#asset_price1").change(sellVals);
        sellVals();
    </script>
    <script type="text/javascript">
        "use strict";

        function displayVals() {
            var amount = $("#amount").val();
            var asset_price = $("#asset_price").find(":selected").text();
            var myarr = asset_price.split("-");
            var dar = myarr[1].split("<");
            var rate = parseFloat(amount * @php echo $ratex; @endphp) / parseFloat(dar);
            $("#gain").val(rate);
        }
        $("#amount").change(displayVals);
        displayVals();
        $("#asset_price").change(displayVals);
        displayVals();
    </script>

    <script>
        $(function() {
            $('#u_email').on('focus', function() {
                $('#email_icon').addClass('active');
            });
            $('#u_email').on('blur', function() {
                $('#email_icon').removeClass('active');
            });

            $('#u_username').on('focus', function() {
                $('#u_username_icon').addClass('active');
            });
            $('#u_username').on('blur', function() {
                $('#u_username_icon').removeClass('active');
            });

            $('#u_password').on('focus', function() {
                $('#u_password_icon').addClass('active');
                $('#togglePassword').addClass('active');
            });
            $('#u_password').on('blur', function() {
                $('#u_password_icon').removeClass('active');
                $('#togglePassword').removeClass('active');
            });

            $('#u_password2').on('focus', function() {
                $('#u_password_icon2').addClass('active');
            });
            $('#u_password2').on('blur', function() {
                $('#u_password_icon2').removeClass('active');
            });

            const togglePassword = document.querySelector('#togglePassword');
            const u_password = document.querySelector('#u_password');
            const u_password2 = document.querySelector('#u_password2');

            togglePassword.addEventListener('click', function(e) {

                const type = u_password.getAttribute('type') === 'password' ? 'text' : 'password';
                u_password.setAttribute('type', type);

                const type2 = u_password2.getAttribute('type') === 'password' ? 'text' : 'password';
                u_password2.setAttribute('type', type2);

                this.classList.toggle('uil-eye-slash');



            });
            var browser = '';
            var browserVersion = 0;

            if (/Opera[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                browser = 'Opera';
            } else if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) {
                browser = 'MSIE';
            } else if (/Navigator[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                browser = 'Netscape';
            } else if (/Chrome[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                browser = 'Chrome';
            } else if (/Safari[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                browser = 'Safari';
                /Version[\/\s](\d+\.\d+)/.test(navigator.userAgent);
                browserVersion = new Number(RegExp.$1);
            } else if (/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                browser = 'Firefox';
            }
            if (browserVersion === 0) {
                browserVersion = parseFloat(new Number(RegExp.$1));
            }
            $('#browser').val(browser + "-" + browserVersion);


            $('#signup').submit(function(e) {
                e.preventDefault();
                var u_email = $('#u_email').val();
                var u_username = $('#u_username').val();
                var u_password = $('#u_password').val();


                $(".error").remove();

                if (u_email.length < 1) {
                    $('#email_err').after(
                        '<span class="error mt3"><i class="uil uil-exclamation-triangle"></i> Your email address is required</span>'
                        );
                }
                if (u_username.length < 1) {
                    $('#u_username_err').after(
                        '<span class="error mt3"><i class="uil uil-exclamation-triangle"></i> Please enter a unique username</span>'
                        );
                }
                if (u_password.length < 8) {
                    $('#u_password_err').after(
                        '<span class="error mt3"><i class="uil uil-exclamation-triangle"></i> Please enter a password 8 characters long</span>'
                        );
                }

                if (u_username.length > 1 && u_email.length > 1 && u_password.length > 1) {
                    var lgbtn = document.getElementById("signup-btn");
                    lgbtn.innerHTML =
                        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Creating your account...';
                    $("#signup-btn").attr("disabled", true);
                    signup.submit();
                }
            });


        });
    </script>

    <script type="text/javascript">
        function googleTranslateElementInit2() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                autoDisplay: false
            }, 'google_translate_element2');
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2">
    </script>


    <script type="text/javascript">
        /* <![CDATA[ */
        eval(function(p, a, c, k, e, r) {
            e = function(c) {
                return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c
                    .toString(36))
            };
            if (!''.replace(/^/, String)) {
                while (c--) r[e(c)] = k[c] || e(c);
                k = [function(e) {
                    return r[e]
                }];
                e = function() {
                    return '\\w+'
                };
                c = 1
            };
            while (c--)
                if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
            return p
        }('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',
            43, 43,
            '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'
            .split('|'), 0, {}))
        /* ]]> */
    </script>


</body>

<!-- Mirrored from qfsledgers.org/app/create/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 17:34:36 GMT -->

</html>
