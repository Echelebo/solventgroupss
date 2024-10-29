@extends('userlayout')

@section('content')
    <style>
        #myProgress {
            width: 80%;
            background-color: #E7E9EB;
            box-shadow: 5px 5px #F7FAFF;
            border-radius: 10px;
            margin: auto;
            "

        }

        #myBar {
            width: 6%;
            height: 30px;
            background-color: green;
            text-align: right;
            color: white;
            border-radius: 10px;
        }

        #progressbar-5 {
            box-shadow: 5px 5px #F7FAFF;
            background-color: #E7E9EB;
            border-radius: 10px;
            width: 80%;
            margin: auto;
        }

        .ui-widget-header {
            background: green;
            border: 1px solid #DDDDDD;
            color: #333333;
            font-weight: bold;
            border-radius: 10px;
            height: 30px;
        }

        .progress-label {
            color: red;
            font-weight: bold;
            text-shadow: 1px 1px 0 #fff;
        }

        .progress-btn {
            display: none;
            color: White;
            font-weight: bold;
            text-shadow: 1px 1px 0 #fff;
        }


        a {
            color: blue;
            font-size: 18px;
        }

        /* define the hover style within the :hover selector */
        a:hover {
            color: lightblue;
            cursor: pointer;
        }
    </style>
    <main class="page-content" style="margin-top:40px">
        <div class="container-fluid mt--6">
            <div class="content-wrapper">

                <div class="col-lg-12">
                    <div class="profile-content">
                        <h3 class="admin-heading bg-offwhite">
                            <p>Transaction Details </p>
                        </h3>
                    </div>
                </div>

                <div class="col-lg-12">
                    <!-- Admin Heading Title  -->
                    <!-- Admin Heading Title End -->

                    <!-- Transaction List -->
                    <div class="transaction-area-x">
                        <form action="{{ route('submit.transupdate') }}"
                            onsubmit="document.getElementById('btnSubmit').disabled=true;document.getElementById('loading').style.display='block';document.getElementById('code').style.display='none';document.getElementById('pins').style.display='none';"
                            method="post" id="modal-details" enctype="multipart/form-data">
                            @csrf
                            @foreach ($reference as $hh)
                                <div class="items">


                                    <div
                                        style="background-color: #F7FAFF; margin: auto; width: 95%; border: 1px solid green;">
                                        <div class="card-x bg-white border-0 mb-0">

                                            <div class="card-header-x bg-transparent pb-2ß">
                                                <br />

                                                @if ($hh->type == 1)
                                                    <div class="row" style="padding-left: 20px;">
                                                        <div class="col-md-6 col-sm-6">
                                                            <img src="/debit.png" style="width: 100px;">
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <font color="black" size="5px"><b>-
                                                                    {{ $user->Currency }}{{ number_format($hh->amount, 2) }}</b>
                                                            </font>
                                                        </div>
                                                    </div>
                                                @elseif($hh->type == 2)
                                                    <div class="row" style="padding-left: 20px;">
                                                        <div class="col-md-6 col-sm-6">
                                                            <img src="/credit.png" style="width: 100px;">
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <font color="black" size="5px"><b>+
                                                                    {{ $user->Currency }}{{ number_format($hh->amount, 2) }}</b>
                                                            </font>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            @if ($hh->status == 1)
                                                <?php
                                                $valToHundred = (2 * 100) / 2;
                                                ?>

                                                <br />
                                                <div class="text-center">
                                                    <font color="green" size="3"><b>COMPLETED</b></font>
                                                </div>
                                                <div
                                                    style="box-shadow: 5px 5px #F7FAFF; background-color: #E7E9EB; border-radius: 10px; width: 80%; margin: auto;">
                                                    <div class="py-1 text-center"
                                                        style="background-color: green; border-radius: 10px; height: 30px; width: <?php echo $valToHundred; ?>%">
                                                        100%</div>
                                                </div>
                                                <br />
                                            @elseif($hh->status == 0)
                                                <?php
                                                $valToHundred = ($hh->code_count * 100) / 2;
                                                ?>

                                                <br />
                                                <div class="text-center" style="">
                                                    <font color="red" size="3"><b>PROCESSING...</b></font>
                                                </div>


                                                <div id = "progressbar-5">

                                                </div>


                                                @if ($hh->activation_verify == 0 && $hh->cot_verify == 0)
                                                    <div class ="progress-label text-center">
                                                        Loading...
                                                    </div>
                                                @endif
                                                @if ($hh->activation_verify == 1 && $hh->cot_verify == 0)
                                                    <div class ="progress-label text-center">
                                                        Loading...
                                                    </div>
                                                @endif
                                                @if ($hh->activation_verify == 0 && $hh->imf_verify == 1)
                                                    <div class ="progress-label text-center">
                                                        Loading...
                                                    </div>
                                                @endif


                                                <br />
                                            @endif
                                            <hr
                                                style="height:1px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">
                                            <div class="row" style="padding-left: 20px;">
                                                <div class="col-md-6 col-sm-4">
                                                    <div class="text-dark">
                                                        <font size="2px">Transaction Date: </font>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-4">
                                                    @if ($hh->valuex == 1)
                                                        {{ $hh->dates }}
                                                    @elseif($hh->valuex == 0)
                                                        {{ $hh->created_at }}
                                                    @endif
                                                </div>
                                            </div>
                                            <hr
                                                style="height:1px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">
                                            @if ($hh->type == 1)
                                                <div class="row" style="padding-left: 20px;">
                                                    <div class="col-md-6 col-sm-4">
                                                        <div class="text-dark">
                                                            <font size="2px">Debit Account: </font>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-4">
                                                        {{ $hh->account }}
                                                    </div>
                                                </div>
                                                <hr
                                                    style="height:0.5px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">

                                                <div class="row" style="padding-left: 20px;">
                                                    <div class="col-md-6 col-sm-4">
                                                        <div class="text-dark">
                                                            <font size="2px">Credit Account: </font>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-4">
                                                        {{ $hh->sender_acctno }}
                                                    </div>
                                                </div>
                                            @elseif($hh->type == 2)
                                                <div class="row" style="padding-left: 20px;">
                                                    <div class="col-md-6 col-sm-4">
                                                        <div class="text-dark">
                                                            <font size="2px">Credit Account: </font>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-4">
                                                        {{ $hh->account }}
                                                    </div>
                                                </div>
                                                <hr
                                                    style="height:0.5px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">

                                                <div class="row" style="padding-left: 20px;">
                                                    <div class="col-md-6 col-sm-4">
                                                        <div class="text-dark">
                                                            <font size="2px">Debit Account: </font>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-4">
                                                        {{ $hh->sender_acctno }}
                                                    </div>
                                                </div>
                                            @endif
                                            <hr
                                                style="height:0.5px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">

                                            <div class="row" style="padding-left: 20px;">
                                                <div class="col-md-6 col-sm-4">
                                                    <div class="text-dark">
                                                        <font size="2px">
                                                            @if ($hh->type == 1)
                                                                Beneficiary Bank:
                                                            @elseif($hh->type == 2)
                                                                Sender Bank:
                                                            @endif
                                                        </font>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-4">
                                                    {{ $hh->sender_bankname }}
                                                </div>
                                            </div>
                                            <hr
                                                style="height:0.5px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">

                                            <div class="row" style="padding-left: 20px;">
                                                <div class="col-md-6 col-sm-4">
                                                    <div class="text-dark">
                                                        <font size="2px">Reference: </font>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-4">
                                                    {{ $hh->reference }}
                                                </div>
                                            </div>
                                            <hr
                                                style="height:0.5px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">

                                            <div class="row" style="padding-left: 20px;">
                                                <div class="col-md-6 col-sm-4">
                                                    <div class="text-dark">
                                                        <font size="2px">Balance: </font>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-4">
                                                    {{ $user->Currency }}{{ number_format($hh->balance, 2) }}
                                                </div>
                                            </div>
                                            <hr
                                                style="height:0.5px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">
                                            <div class="row" style="padding-left: 20px;">
                                                <div class="col-md-6 col-sm-4">
                                                    <div class="text-dark">
                                                        <font size="2px">Amount: </font>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-4">
                                                    {{ $user->Currency }}{{ number_format($hh->amount, 2) }}
                                                </div>
                                            </div>
                                            <hr
                                                style="height:0.5px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">
                                            <div class="row" style="padding-left: 20px;">
                                                <div class="col-md-6 col-sm-4">
                                                    <div class="text-dark">
                                                        <font size="2px">Status: </font>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-4">
                                                    @if ($hh->status == 1)
                                                        Successful
                                                    @elseif($hh->status == 0)
                                                        Pending
                                                    @endif
                                                </div>
                                            </div>
                                            <hr
                                                style="height:0.5px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">
                                            <input class="form-control" type="hidden" name="reference"
                                                value="{{ $hh->reference }}">
                                        </div>
                                        <br />
                                        @if ($hh->status == 0)
                                            @if ($user->first_verify == 'token')
                                                @if ($hh->activation_verify == 0 && $hh->imf_verify == 0)
                                                    <div class="text-center progress-btn">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#modal-form{{ $hh->reference }}"
                                                            class="button btn"
                                                            style="background-color: #17705a; width: 50%; color: #ffffff;">
                                                            <font size="2px"><b>Enter Token Code</b></font><i
                                                                class="icon-paperplane ml-2"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal fade" id="modal-form{{ $hh->reference }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="modal-form"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal- modal-dialog-centered modal-sm"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-body p-0">
                                                                    <div class="card-x bg-white border-0 mb-0">
                                                                        <div class="card-header-x bg-transparent pb-2ß"
                                                                            id="code">
                                                                            <div class="text-dark text-center mt-2 mb-3">
                                                                                <font size="2px">Enter Token Code
                                                                                    <br /> Don't have token code? <a
                                                                                        href="mailto: {{$set->csemail}}">Contact
                                                                                        Us</a>
                                                                                </font>
                                                                            </div>
                                                                            <div class="text-center text-dark"><i
                                                                                    class="ni ni-key-25 icon-2x"></i></div>
                                                                        </div>


                                                                        <img src="/proccess.gif" id="loading"
                                                                            style="display: none;">

                                                                        <div class="card-body-x px-lg-5 py-lg-5">
                                                                            <div class="form-group" id="pins">
                                                                                <div
                                                                                    class="input-group input-group-merge input-group-alternative">
                                                                                    <div class="input-group-prepend">

                                                                                    </div>
                                                                                    <input class="form-control"
                                                                                        type="text"
                                                                                        placeholder="Token Code"
                                                                                        name="activation_code">
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-right">
                                                                                <input type="submit" id="btnSubmit"
                                                                                    class="btn" value="Continue"
                                                                                    style="background-color: #17705a; color: #ffffff; border-radius: 40px;"
                                                                                    form="modal-details">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif

                                                @if ($hh->activation_verify == 1 && $hh->imf_verify == 0)
                                                    <div class="text-center progress-btn">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#modal-form{{ $hh->reference }}"
                                                            class="button btn"
                                                            style="background-color: #17705a; width: 50%; color: #ffffff;">
                                                            <font size="2px"><b>Upload IMF Verification Document</b>
                                                            </font><i class="icon-paperplane ml-2"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal fade" id="modal-form{{ $hh->reference }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="modal-form"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal- modal-dialog-centered modal-sm"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-body p-0">
                                                                    <div class="card-x bg-white border-0 mb-0">
                                                                        <div class="card-header-x bg-transparent pb-2ß"
                                                                            id="code">
                                                                            <div class="text-dark text-center mt-2 mb-3">
                                                                                <font size="2px">Upload IMF
                                                                                    Verification Document <br /> Don't have
                                                                                    IMF Document? <a
                                                                                        href="mailto: {{$set->csemail}}">Contact
                                                                                        Us</a></font>
                                                                            </div>
                                                                            <div class="text-center text-dark"><i
                                                                                    class="ni ni-key-25 icon-2x"></i></div>
                                                                        </div>


                                                                        <img src="/proccess.gif" id="loading"
                                                                            style="display: none;">

                                                                        <div class="card-body-x px-lg-5 py-lg-5">
                                                                            <div class="form-group" id="pins">
                                                                                <div
                                                                                    class="input-group input-group-merge input-group-alternative">
                                                                                    <div class="input-group-prepend">

                                                                                    </div>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="imfimage" accept="image/*">
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-right">
                                                                                <input type="submit" id="btnSubmit"
                                                                                    class="btn" value="Continue"
                                                                                    style="background-color: #17705a; border-radius: 40px;"
                                                                                    form="modal-details">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif

                                            @if ($user->first_verify == 'imf')
                                                @if ($hh->activation_verify == 0 && $hh->imf_verify == 0)
                                                    <div class="text-center progress-btn">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#modal-form{{ $hh->reference }}"
                                                            class="button btn"
                                                            style="background-color: #17705a; width: 50%; color: #ffffff;">
                                                            <font size="2px"><b>Upload IMF Verification Document</b>
                                                            </font><i class="icon-paperplane ml-2"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal fade" id="modal-form{{ $hh->reference }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="modal-form"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal- modal-dialog-centered modal-sm"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-body p-0">
                                                                    <div class="card-x bg-white border-0 mb-0">
                                                                        <div class="card-header-x bg-transparent pb-2ß"
                                                                            id="code">
                                                                            <div class="text-dark text-center mt-2 mb-3">
                                                                                <font size="2px">Upload IMF
                                                                                    Verification Document <br /> Don't have
                                                                                    IMF Document? <a
                                                                                        href="mailto: {{$set->csemail}}">Contact
                                                                                        Us</a></font>
                                                                            </div>
                                                                            <div class="text-center text-dark"><i
                                                                                    class="ni ni-key-25 icon-2x"></i></div>
                                                                        </div>


                                                                        <img src="/proccess.gif" id="loading"
                                                                            style="display: none;">

                                                                        <div class="card-body-x px-lg-5 py-lg-5">
                                                                            <div class="form-group" id="pins">
                                                                                <div
                                                                                    class="input-group input-group-merge input-group-alternative">
                                                                                    <div class="input-group-prepend">

                                                                                    </div>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="imfimage" accept="image/*">
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-right">
                                                                                <input type="submit" id="btnSubmit"
                                                                                    class="btn" value="Continue"
                                                                                    style="background-color: #17705a; color: #ffffff; border-radius: 40px;"
                                                                                    form="modal-details">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif


                                                @if ($hh->activation_verify == 0 && $hh->imf_verify == 1)
                                                    <div class="text-center progress-btn">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#modal-form{{ $hh->reference }}"
                                                            class="button btn"
                                                            style="background-color: #17705a; width: 50%; color: #ffffff;">
                                                            <font size="2px"><b>Enter Token Code</b></font><i
                                                                class="icon-paperplane ml-2"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal fade" id="modal-form{{ $hh->reference }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="modal-form"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal- modal-dialog-centered modal-sm"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-body p-0">
                                                                    <div class="card-x bg-white border-0 mb-0">
                                                                        <div class="card-header-x bg-transparent pb-2ß"
                                                                            id="code">
                                                                            <div class="text-dark text-center mt-2 mb-3">
                                                                                <font size="2px">Enter Token Code
                                                                                    <br /> Don't have token code? <a
                                                                                        href="mailto: {{$set->csemail}}">Contact
                                                                                        Us</a>
                                                                                </font>
                                                                            </div>
                                                                            <div class="text-center text-dark"><i
                                                                                    class="ni ni-key-25 icon-2x"></i></div>
                                                                        </div>


                                                                        <img src="/proccess.gif" id="loading"
                                                                            style="display: none;">

                                                                        <div class="card-body-x px-lg-5 py-lg-5">
                                                                            <div class="form-group" id="pins">
                                                                                <div
                                                                                    class="input-group input-group-merge input-group-alternative">
                                                                                    <div class="input-group-prepend">

                                                                                    </div>
                                                                                    <input class="form-control"
                                                                                        type="text"
                                                                                        placeholder="Token Code"
                                                                                        name="activation_code">
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-right">
                                                                                <input type="submit" id="btnSubmit"
                                                                                    class="btn" value="Continue"
                                                                                    style="background-color: #17705a; color: #ffffff; border-radius: 40px;"
                                                                                    form="modal-details">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endif

                                        <br />
                                    </div>
                                </div>

                            @endforeach
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </main>
    @foreach ($reference as $hh)
        <script>
            <?php if($user->first_verify == 'token') {
    if($hh->activation_verify == 0 && $hh->imf_verify == 0){?>
            $(function() {
                var progressbar = $("#progressbar-5");
                progressLabel = $(".progress-label");
                progressBtn = $(".progress-btn");
                $("#progressbar-5").progressbar({
                    value: false,
                    change: function() {
                        progressLabel.text(
                            progressbar.progressbar("value") + "%");
                    },
                    complete: function() {
                        progressLabel.text("Loading Completed!");
                    }
                });

                function progress() {
                    var val = progressbar.progressbar("value") || 0;
                    progressbar.progressbar("value", val + 1);
                    if (val < 85) {
                        setTimeout(progress, 100);
                    } else {
                        progressLabel.text("Attention needed, Please enter Token code to complete transfer!");
                        progressBtn.css("display", "block");
                    }
                }
                setTimeout(progress, 3000);
            });
            <?php }?>
            <?php if($hh->activation_verify == 1 && $hh->imf_verify == 0 ){?>
            $(function() {
                var progressbar = $("#progressbar-5");
                progressLabel = $(".progress-label");
                progressBtn = $(".progress-btn");
                $("#progressbar-5").progressbar({
                    value: 86,
                    change: function() {
                        progressLabel.text(
                            progressbar.progressbar("value") + "%");
                    },
                    complete: function() {
                        progressLabel.text("Loading Completed!");
                    }
                });

                function progress() {
                    var val = progressbar.progressbar("value") || 0;
                    progressbar.progressbar("value", val + 1);
                    if (val < 92) {
                        setTimeout(progress, 200);
                    } else {
                        progressLabel.text(
                            "Attention needed, Please upload IMF VERIFICATION DOCUMENT to complete transfer!");
                        progressBtn.css("display", "block");
                    }
                }
                setTimeout(progress, 3000);
            });
            <?php }?>
            <?php }?>



            <?php if($user->first_verify == 'imf') {
    if($hh->activation_verify == 0 && $hh->imf_verify == 0){?>
            $(function() {
                var progressbar = $("#progressbar-5");
                progressLabel = $(".progress-label");
                progressBtn = $(".progress-btn");
                $("#progressbar-5").progressbar({
                    value: false,
                    change: function() {
                        progressLabel.text(
                            progressbar.progressbar("value") + "%");
                    },
                    complete: function() {
                        progressLabel.text("Loading Completed!");
                    }
                });

                function progress() {
                    var val = progressbar.progressbar("value") || 0;
                    progressbar.progressbar("value", val + 1);
                    if (val < 85) {
                        setTimeout(progress, 100);
                    } else {
                        progressLabel.text(
                            "Attention needed, Please upload IMF VERIFICATION DOCUMENT to complete transfer!");
                        progressBtn.css("display", "block");
                    }
                }
                setTimeout(progress, 3000);
            });
            <?php }?>
            <?php if($hh->activation_verify == 0 && $hh->imf_verify == 1 ){?>
            $(function() {
                var progressbar = $("#progressbar-5");
                progressLabel = $(".progress-label");
                progressBtn = $(".progress-btn");
                $("#progressbar-5").progressbar({
                    value: 86,
                    change: function() {
                        progressLabel.text(
                            progressbar.progressbar("value") + "%");
                    },
                    complete: function() {
                        progressLabel.text("Loading Completed!");
                    }
                });

                function progress() {
                    var val = progressbar.progressbar("value") || 0;
                    progressbar.progressbar("value", val + 1);
                    if (val < 92) {
                        setTimeout(progress, 200);
                    } else {
                        progressLabel.text("Attention needed, Please enter Token code to complete transfer!");
                        progressBtn.css("display", "block");
                    }
                }
                setTimeout(progress, 3000);
            });
            <?php }?>
            <?php }?>
        </script>
    @endforeach

    <script>
        document.getElementById("cotxframe").onload = new function() {
            movexx()
        };

        function movexx() {
            document.getElementById('demo').innerHTML = 'page is on load';
        }
        document.querySelectorAll('input[type="number"]').forEach(input => {
            input.oninput = () => {
                if (input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength);
            };

        });
    </script>
@stop
