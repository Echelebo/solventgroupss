
<link rel="stylesheet" href="{{url('/')}}/lothian/assets/css/main.css">
    <link rel="stylesheet" href="{{url('/')}}/lothian/assets/css/aos.css">
    <link rel="stylesheet" href="{{url('/')}}/lothian/assets/fonts/fontawesome-free-6.2.0-web/css/all.css">


@extends('loginlayout')
@section('css')

@stop
@section('content')
<div class="reg-container" style="background: transparent url('{{url('/')}}/lothian/assets/img/hd/coworkers-working-computer.jpg') center center no-repeat; background-size: cover; background-attachment: fixed; height: 100vh; width: 15000px;">

    <div class="login">
        <div class="content">
                        <h3 class="align-center white">Welcome to Lothian Credit Internet Banking </h3>
            <p style="text-align: left; color: var(--white-color)">Sign in with your Internet Banking details. Not registered on Internet Banking? Click on register to get started</p>
            <form action="https://lothiancreditonline.com/login" method="post">
                <span class="input-container"><input type="text" name="id" id="email" placeholder="Email/Username/Acct Number"><i class="details fa-regular fa-circle-user"></i></span>
                <span class="input-container"><input type="password" name="password" id="password" placeholder="Password"><i class="details fa fa-fingerprint"></i><span class="eye" id="eye" onclick="toggleEye()"><i class="fa fa-eye-slash"></i></span></span>
                <p><a class="white align-right" href="forgot.html">Forgot Password?</a></p>
                <button type="submit" class="submit-button white">Proceed</button>
                <p class="white" style="text-align: center;">Don't have an account yet?</p>
                <button type="button" onclick="redirectToRegister()" class="submit-blue align-center white">Create an account <i class="fa-solid fa-arrow-right-long"></i></button>
            </form>
        </div>
    </div>
</div>

@stop
