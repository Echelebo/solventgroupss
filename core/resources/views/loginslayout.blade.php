<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from lothiancreditonline.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2024 08:18:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('/')}}/lothian/assets/css/main.css">
    <link rel="stylesheet" href="{{url('/')}}/lothian/assets/css/aos.css">
    <link rel="stylesheet" href="{{url('/')}}/lothian/assets/fonts/fontawesome-free-6.2.0-web/css/all.css">
    <link rel="icon" href="{{url('/')}}/lothian/assets/img/metro.png">
    <title>Login | Lothian Credit Online</title>
    <!-- Smartsupp Live Chat script -->

</head>
<body>
    <div class="header" style="position: relative; background: var(--blue-color);">
            <div class="left">
                <div id="mobile-icon"><i class="fa-solid fa-bars"></i></div>
                <a href="index.html"><img src="{{url('/')}}/lothian/assets/img/metro-logo.png" class="logo" alt="logo"></a>
            </div>
            <div class="center">
                <a href="bank-accounts.html">Bank Accounts</a>
                <a href="savings.html">Savings</a>
                <a href="mortgage.html">Mortgages</a>
                <a href="insurance.html">Insurance</a>
                <a href="private-banking.html">Private-Banking</a>
            </div>
            <div class="right">
                <a id="hide-mobile" href="#"><i class="fa-solid fa-location-dot"></i>Find A Store</a>
                <a id="hide-mobile" href="#"><i class="fa-solid fa-regular fa-magnifying-glass"></i> Help</a>
                <a id="red-button" href="#">Login <i class="fa-solid fa-chevron-down"></i></a>            </div>
            <div class="reg-tool align-center">
                <a href="login.html">Apply for online banking</a>
                <a href="online-banking.html">Get started guide</a>
                <a href="business.html">Business banking</a>
            </div>
    </div>
    <div class="nav-cont align-center">
        <a href="business.html">Bank Accounts</a>
        <a href="savings.html">Savings</a>
        <a href="mortgage.html">Mortgages</a>
        <a href="insurance.html">Insurance</a>
        <a href="private-banking.html">Private Banking</a>
        <br/><br/>
        <p><i class="fa-solid fa-location-dot"></i>Address: Lothian Credit, Agatan 55 Linkoping, South Central Sweden, 582 22</p>

    </div>

    @yield('content')

    <script>
        function redirectToRegister() {
            console.log("Button clicked");
            window.location.href = 'register.html';
        }
        function toggleEye(){
            var passInput = document.getElementById('password');
            var eyeIcon = document.getElementById('eye');
            if (passInput.type === 'password') {
                passInput.type = 'text';
                eyeIcon.innerHTML = '<i class="fa fa-eye-slash"></i>';
            } else {
                passInput.type = 'password';
                eyeIcon.innerHTML = '<i class="fa fa-eye"></i>';
            }
        }
    </script>
    <div class="footer2">
            <div class="copyright align-center">
                <p class="white">
                    Powered by Lothian Credit   copyright &copy; 2024
                </p>
            </div>
        </div>
       <script src="{{url('/')}}/lothian/assets/js/index.js"></script>
       <script src="{{url('/')}}/lothian/assets/js/aos.js"></script>
       <script>
      AOS.init({
        easing: 'ease-in-out-sine',
        duration: 1000
         });</script>
    </body>

    <!-- Mirrored from lothiancreditonline.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2024 08:18:46 GMT -->
    </html>