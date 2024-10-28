

<link rel="stylesheet" href="https://central-ab.com/temp/plugins/themefisher-font.v-2/style.css">
<!-- bootstrap.min css -->
<link rel="stylesheet" href="https://central-ab.com/temp/plugins/bootstrap/dist/css/bootstrap.min.css">
<!-- Slick Carousel -->
<link rel="stylesheet" href="https://central-ab.com/temp/plugins/slick-carousel/slick/slick.css">
<link rel="stylesheet" href="https://central-ab.com/temp/plugins/slick-carousel/slick/slick-theme.css">

<link href="https://central-ab.com/temp/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
<!-- Main Stylesheet -->
<link rel="stylesheet" href="https://central-ab.com/temp/css/style.css">
<link rel="stylesheet" href="https://central-ab.com/temp/uikit/css/uikit.min.css" />
<link rel="stylesheet" href="https://central-ab.com/temp/sweetalert2/dist/sweetalert2.min.css">
<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Roboto" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Gothic+A1:300|Lalezar" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Slabo+13px&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://central-ab.com/temp/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet"
    href="https://central-ab.com/temp/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

<!-- <script src="plugins/jquery/jquery-3.3.1.min.js"></script> -->

<script type="text/javascript" src="https://central-ab.com/city_state.js"></script>

<style type="text/css">
    @import url("https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,500,600,700|Chivo:300,400,700,700i,900");
    @import url('https://fonts.googleapis.com/css?family=Titillium+Web&display=swap');
    @import url('https://fonts.googleapis.com/css?family=Alegreya|Catamaran|Vollkorn&display=swap');

    @media (max-width: 800px) {
        .con-warn {
            color: red;
            display: block !important;
        }

        .converter {
            display: none !important;
        }


        .togs {
            display: none !important;
        }


    }

    #info-div {
        border-left: 1px solid #e2e2e2 !important;
    }

    @media (max-width: 780px) {
        #info-div {
            border-left: none !important;

        }

        #heas {
            font-size: 28px !important;
        }
    }

    .cow {
        color: #334e5e;
    }

    .gain {
        color: #32CD32;
    }

    .lost {
        color: #8B0000;
    }

    .mini-nav {
        color: #250858;
        text-decoration: none;
        /*margin: 5%!important;*/
    }

    .mini-nav-span {
        padding: 5px
    }

    .mini-nav-span:hover {
        border-bottom: 2px solid black;
    }

    .mini-nav-div {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    /* fancy checkbox and radio button */
    .fancy-checkbox {
        margin-right: 10px;
    }

    .fancy-checkbox,
    .fancy-checkbox label {
        font-weight: normal;
    }

    .fancy-checkbox input[type="checkbox"] {
        display: none;
    }

    .fancy-checkbox input[type="checkbox"]+span {
        display: inline-block;
        vertical-align: middle;
        *vertical-align: auto;
        *zoom: 1;
        *display: inline;
        cursor: pointer;
        position: relative;
    }

    .fancy-checkbox input[type="checkbox"]+span:before {
        display: inline-block;
        vertical-align: middle;
        *vertical-align: auto;
        *zoom: 1;
        *display: inline;
        position: relative;
        bottom: 1px;
        width: 20px;
        height: 20px;
        margin-right: 10px;
        content: "";
        border: 1px solid #ccc;
    }

    .fancy-checkbox input[type="checkbox"]:checked+span:before {
        font-family: FontAwesome;
        content: '\f00c';
        font-size: 18px;
        color: #fff;
        text-align: center;
        line-height: 16px;
        background: #0000FF;
        border: 1px solid #0000FF;
    }

    .fancy-checkbox.custom-color-green input[type="checkbox"]:checked+span:before {
        color: #53D76A;
        background-color: #fff;
    }

    .fancy-checkbox.custom-bgcolor-green input[type="checkbox"]:checked+span:before {
        color: #fff;
        background-color: #53D76A;
        border-color: #32cf4d;
    }

    .btn-remember:hover {
        background-color: #0000FF;
    }

    .btn-remember {
        width: 100%;
        border-radius: 0px;
        border: 1px solid #fff;
        font-family: 'Roboto Condensed', sans-serif;
        background-color: transparent;
        color: #fff;
        font-weight: bold;
        margin-bottom: 5px
    }

    .footer-li {
        display: inline-block;
        color: #e2e2e2 !important;
    }

    .footer-li a {
        color: #0000FF !important;
    }

    .footer-li:hover {
        text-decoration: underline;
    }

    .footer-icon {
        display: inline-block;
        margin-right: 10px
    }

    #footer-icon:hover {
        transform: scale(1.4, 1.4);
        /*transform-style: font-size;*/
    }

    /*fancy radio*/
    .fancy-radio {
        margin-right: 10px;
    }

    .fancy-radio,
    .fancy-radio label {
        font-weight: normal;
    }

    .fancy-radio input[type="radio"] {
        display: none;
    }

    .fancy-radio input[type="radio"]+span {
        display: block;
        cursor: pointer;
        position: relative;
    }

    .fancy-radio input[type="radio"]+span i {
        display: inline-block;
        vertical-align: middle;
        *vertical-align: auto;
        *zoom: 1;
        *display: inline;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        border-radius: 15px;
        position: relative;
        bottom: 1px;
        content: "";
        border: 1px solid #ccc;
        width: 28px;
        height: 28px;
        margin-right: 5px;
    }

    .fancy-radio input[type="radio"]:checked+span i:after {
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        display: block;
        position: relative;
        top: 4px;
        left: 4px;
        content: '';
        width: 18px;
        height: 18px;
        background-color: #7b848c;
    }

    .fancy-radio.custom-color-green input[type="radio"]:checked+span i:after {
        background-color: #0052C2;
    }

    .fancy-radio.custom-bgcolor-green input[type="radio"]:checked+span i {
        background-color: #0052C2;
    }

    .fancy-radio.custom-bgcolor-green input[type="radio"]:checked+span i:after {
        background-color: #fff;
    }

    /*jssor slider loading skin spin css*/
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    /*jssor slider bullet skin 031 css*/
    .jssorb031 {
        position: absolute;
    }

    .jssorb031 .i {
        position: absolute;
        cursor: pointer;
    }

    .jssorb031 .i .b {
        fill: #000;
        fill-opacity: 0.5;
        stroke: #fff;
        stroke-width: 1200;
        stroke-miterlimit: 10;
        stroke-opacity: 0.3;
    }

    .jssorb031 .i:hover .b {
        fill: #fff;
        fill-opacity: .7;
        stroke: #000;
        stroke-opacity: .5;
    }

    .jssorb031 .iav .b {
        fill: #fff;
        stroke: #000;
        fill-opacity: 1;
    }

    .jssorb031 .i.idn {
        opacity: .3;
    }

    #learnmore:hover {
        color: #CC1632 !important;
    }

    /********************** Custom Button Styling ************************/
    .blood-button {
        /***-webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;***/
        padding: 10px 20px;
        border: 2px solid #6a3433;
        text-align: center;
        text-transform: uppercase;
        position: relative;
        overflow: hidden;
        -webkit-transition: .3s;
        transition: .3s;
        text-decoration: none !important;
        margin-top: 10px;
        white-space: nowrap !important;
        color: #6a3433;
    }

    @media (hover) {
        .blood-button:after {
            position: absolute;
            -webkit-transition: .3s;
            transition: .3s;
            content: '';
            width: 0;
            left: 50%;
            bottom: 0;
            height: 3px;
            background: #6a3433;
            color: #6a3433;
        }

        .blood-button:hover:after {
            width: 100%;
            left: 0;

        }
    }

    .blood-button-solid {
        /***-webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;***/
        padding: 10px 20px;
        border: 2px solid #6a3433;
        text-align: center;
        text-transform: uppercase;
        position: relative;
        overflow: hidden;
        -webkit-transition: .3s;
        transition: .3s;
        text-decoration: none !important;
        margin-top: 10px;
        background: #6a3433;
        color: #fff !important;
    }

    @media (hover) {
        .blood-button-solid:after {
            position: absolute;
            -webkit-transition: .3s;
            transition: .3s;
            content: '';
            width: 0;
            left: 50%;
            bottom: 0;
            height: 3px;
            background: #6a3433;
        }

        .blood-button-solid:hover {
            background: #fff;
            color: #6a3433 !important;
        }

        .blood-button-solid:hover:after {
            width: 100%;
            left: 0;
        }
    }


    .red-button {
        /***-webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;***/
        padding: 10px 20px;
        border: 2px solid #CC1632;
        text-align: center;
        text-transform: uppercase;
        position: relative;
        overflow: hidden;
        -webkit-transition: .3s;
        transition: .3s;
        text-decoration: none !important;
        margin-top: 10px;
        white-space: nowrap !important;
        color: #CC1632;
    }

    @media (hover) {
        .red-button:after {
            position: absolute;
            -webkit-transition: .3s;
            transition: .3s;
            content: '';
            width: 0;
            left: 50%;
            bottom: 0;
            height: 3px;
            background: #CC1632;
            color: #CC1632;
        }

        .red-button:hover:after {
            width: 100%;
            left: 0;

        }
    }

    .red-button-solid {
        /***-webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;***/
        padding: 10px 20px;
        border: 2px solid #CC1632;
        text-align: center;
        text-transform: uppercase;
        position: relative;
        overflow: hidden;
        -webkit-transition: .3s;
        transition: .3s;
        text-decoration: none !important;
        margin-top: 10px;
        background: #CC1632;
        color: #fff !important;
    }

    @media (hover) {
        .red-button-solid:after {
            position: absolute;
            -webkit-transition: .3s;
            transition: .3s;
            content: '';
            width: 0;
            left: 50%;
            bottom: 0;
            height: 3px;
            background: #CC1632;
        }

        .red-button-solid:hover {
            background: #fff;
            color: #CC1632 !important;
        }

        .red-button-solid:hover:after {
            width: 100%;
            left: 0;
        }
    }

    .blue-button {
        /***-webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;***/
        padding: 10px 20px;
        border: 2px solid #016696;
        text-align: center;
        text-transform: uppercase;
        position: relative;
        overflow: hidden;
        -webkit-transition: .3s;
        transition: .3s;
        text-decoration: none !important;
        margin-top: 10px;
        white-space: nowrap !important;
        color: #016696;
    }

    @media (hover) {
        .blue-button:after {
            position: absolute;
            -webkit-transition: .3s;
            transition: .3s;
            content: '';
            width: 0;
            left: 50%;
            bottom: 0;
            height: 3px;
            background: #016696;
            color: #016696;
        }

        .blue-button:hover:after {
            width: 100%;
            left: 0;

        }
    }

    .blue-button-solid {
        /***-webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;***/
        padding: 10px 20px;
        border: 2px solid #016696;
        text-align: center;
        text-transform: uppercase;
        position: relative;
        overflow: hidden;
        -webkit-transition: .3s;
        transition: .3s;
        text-decoration: none !important;
        margin-top: 10px;
        background: #016696;
        color: #fff !important;
    }

    @media (hover) {
        .blue-button-solid:after {
            position: absolute;
            -webkit-transition: .3s;
            transition: .3s;
            content: '';
            width: 0;
            left: 50%;
            bottom: 0;
            height: 3px;
            background: #016696;
        }

        .blue-button-solid:hover {
            background: #fff;
            color: #016696 !important;
        }

        .blue-button-solid:hover:after {
            width: 100%;
            left: 0;
        }
    }

    .lemon-button {
        /***-webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;***/
        padding: 10px 20px;
        border: 2px solid #8DC63F;
        text-align: center;
        text-transform: uppercase;
        position: relative;
        overflow: hidden;
        -webkit-transition: .3s;
        transition: .3s;
        text-decoration: none !important;
        margin-top: 10px;
        white-space: nowrap !important;
        color: #8DC63F;
    }

    @media (hover) {
        .lemon-button:after {
            position: absolute;
            -webkit-transition: .3s;
            transition: .3s;
            content: '';
            width: 0;
            left: 50%;
            bottom: 0;
            height: 3px;
            background: #8DC63F;
            color: #8DC63F;
        }

        .lemon-button:hover:after {
            width: 100%;
            left: 0;

        }
    }

    .lemon-button-solid {
        /***-webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;***/
        padding: 10px 20px;
        border: 2px solid #8DC63F;
        text-align: center;
        text-transform: uppercase;
        position: relative;
        overflow: hidden;
        -webkit-transition: .3s;
        transition: .3s;
        text-decoration: none !important;
        margin-top: 10px;
        background: #8DC63F;
        color: #fff !important;
    }

    @media (hover) {
        .lemon-button-solid:after {
            position: absolute;
            -webkit-transition: .3s;
            transition: .3s;
            content: '';
            width: 0;
            left: 50%;
            bottom: 0;
            height: 3px;
            background: #8DC63F;
        }

        .lemon-button-solid:hover {
            background: #fff;
            color: #8DC63F !important;
        }

        .lemon-button-solid:hover:after {
            width: 100%;
            left: 0;
        }
    }
</style>

</head>

<body id="body">


    <!--
Welcome Slider

==================================== -->


    <section class="" style="background-color: #016696; margin-top: 3%;">
        <!-- <===================================  -->
        <div class="container">
            <div class="row" style="padding: 1% 0% 1% 0%;">
                <div class="col-md-12">
                    <h4 style="color: #fff; font-family: 'Roboto Condensed', sans-serif; font-weight: lighter; ">Recover
                        Password | Finatex Commercial Bank </h4>
                </div>
            </div>
        </div>
    </section>

    <section class="" style="clear: both;">
        <div class="">


            <section class="" style="background-color: #fff; margin-top: 5%">
                <div class="container">
                    <div class="row"
                        style="background-color: #f7f7f7; border-top: 1px solid #d6d6d6; padding-top: 3%">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class=""
                                        style="font-family: 'Roboto Condensed', sans-serif; font-weight: lighter; color: #012169; float: left;">
                                        <big>Recover Password</big>
                                    </h4>

                                    <p class=""
                                        style="font-family: 'Roboto Condensed', sans-serif; font-weight: lighter; color: #6b5e51; clear: both;">
                                        <big>Welcome. Recover your password in just minutes.</big>
                                    </p>
                                    <hr style="border: 1px solid #d6d6d6; clear: both;">
                                    <br>

                                    <br>


                                    <p class=""
                                        style="font-family: 'Gothic A1', sans-serif; font-weight: lighter; color: #012169; clear: both;">
                                        <big style="font-size: 22px; font-weight: 600">Please provide your email address
                                            to recover your password</big>
                                    </p>

                                    <div>
                                        <form action="{{ route('user.password.email') }}" method="post"
                                            data-saasone="contact-froms">
                                            @csrf
                                            <div class="form-group row">
                                                <div class="col-sm-3"></div>
                                                @if ($errors->has('email'))
                                                    <p style="color: #DC1414">
                                                        {{ $errors->first('email') }}
                                                    </p>
                                                @endif
                                                <div class="col-sm-6" style="height: 3.25rem;">

                                                    <input style="height: 3.25rem; border-radius: 0px"
                                                        class="reg-form form-control" type="email" name="email"
                                                        placeholder="Email" required>
                                                </div>
                                                <div class="col-md-3"></div>
                                            </div>

                                            <div class="form-group row" style="margin-top: 5%">
                                                <div class="col-md-12">
                                                    <center>
                                                        <button type="submit" class="btn btn-sm blue-button">SEND
                                                            LINK</button>
                                                    </center>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>



    <section class="" style="background-color: #f9f7f3; padding-bottom: 3%; margin-top: 2%">


        </div> <!-- End container -->
    </section>
    <br>


