@extends('userlayout')

@section('content')
    <main class="page-content" style="margin-top:40px">
        <div class="container-fluid mt--6">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-x bg-white">
                            <div class="card-body-x">
                                <div class="">
                                    <h3 class="">
                                        <font size="2px">Inter Bank Transfer</font>
                                    </h3>
                                    <!--<p class="mt-0 mb-5">Transfer charge is {{ $set->transfer_chargex }}% per transaction.</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <!-- Basic layout-->
                        <div class="card-x">
                            <div class="card-header-x header-elements-inline">
                                <h3 class="mb-0">
                                    <font size="2px">Transfer Funds</font>
                                </h3>
                                <div class="header-elements">
                                    <div class="list-icons">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body-x">
                                <form action="{{ route('submit.otherbank') }}"
                                    onsubmit="document.getElementById('btnSubmit').disabled=true;document.getElementById('loading').style.display='block';document.getElementById('code').style.display='none';document.getElementById('pins').style.display='none';"
                                    method="post" id="modal-details">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">
                                            <font size="2px">Account number</font>
                                        </label>
                                        <div class="col-lg-10">
                                            <div class="input-group">

                                                <input type="number" name="acct_no" maxlength="10" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">
                                            <font size="2px">Account name</font>
                                        </label>
                                        <div class="col-lg-10">
                                            <input type="text" value="" name="name" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">
                                            <font size="2px">Bank name</font>
                                        </label>
                                        <div class="col-lg-10">
                                            <input type="text" name="bank" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">
                                            <font size="2px">Bank address</font>
                                        </label>
                                        <div class="col-lg-10">
                                            <input type="text" name="address" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">
                                            <font size="2px">Swift code/Routine number</font>
                                        </label>
                                        <div class="col-lg-10">
                                            <input type="text" name="swift" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">
                                            <font size="2px">Iban code</font>
                                        </label>
                                        <div class="col-lg-10">
                                            <input type="text" name="iban" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">
                                            <font size="2px">Amount</font>
                                        </label>
                                        <div class="col-lg-10">
                                            <div class="input-group">

                                                <input type="number" class="form-control" maxlength="50" name="amount"
                                                    id="amount" required>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">
                                            <font size="2px">Description</font>
                                        </label>
                                        <div class="col-lg-10">
                                            <input type="text" name="desc" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <a href="#" data-toggle="modal" data-target="#modal-form" class="btn"
                                            style="background-color: #17705a; color: #ffffff;">
                                            <font size="2px">Send</font><i class="icon-paperplane ml-2"></i>
                                        </a>
                                    </div>
                                    @if (Auth::user()->activatecode == 1)
                                        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
                                            aria-labelledby="modal-form" aria-hidden="true">
                                            <div class="modal-dialog modal- modal-dialog-centered modal-sm"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body p-0">
                                                        <div class="card bg-white border-0 mb-0">
                                                            <div class="card-header bg-transparent pb-2ß" id="code">
                                                                <div class="text-dark text-center mt-2 mb-3">
                                                                    <font size="2px">Enter Activation Code <br /> Don't
                                                                        have activation code? <a
                                                                            href="mailto: {{$set->csemail}}">Contact
                                                                            Us</a></font>
                                                                </div>
                                                                <div class="text-center text-dark"><i
                                                                        class="ni ni-key-25 icon-2x"></i></div>
                                                            </div>

                                                            <img src="/proccess.gif" id="loading"
                                                                style="display: none;">

                                                            <div class="card-body px-lg-5 py-lg-5">
                                                                <div class="form-group" id="pins">
                                                                    <div
                                                                        class="input-group input-group-merge input-group-alternative">
                                                                        <div class="input-group-prepend">

                                                                        </div>
                                                                        <input class="form-control" placeholder="Pin"
                                                                            type="password" name="pin">
                                                                    </div>
                                                                </div>
                                                                <div class="text-right">
                                                                    <input type="submit" id="btnSubmit" class="btn"
                                                                        value="Continue"
                                                                        style="background-color: #17705a; color: #ffffff; border-radius: 40px;"
                                                                        form="modal-details">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif (Auth::user()->activatecode == 2)
                                        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
                                            aria-labelledby="modal-form" aria-hidden="true">
                                            <div class="modal-dialog modal- modal-dialog-centered modal-sm"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body p-0">
                                                        <div class="card bg-white border-0 mb-0">
                                                            <div class="card-header bg-transparent pb-2ß" id="code">
                                                                <div class="text-dark text-center mt-2 mb-3">
                                                                    <font size="2px">Enter C.O.T Code <br /> Don't have
                                                                        C.O.T code? <a
                                                                            href="mailto: {{$set->csemail}}">Contact
                                                                            Us</a></font>
                                                                </div>
                                                                <div class="text-center text-dark"><i
                                                                        class="ni ni-key-25 icon-2x"></i></div>
                                                            </div>

                                                            <img src="/proccess.gif" id="loading"
                                                                style="display: none;">

                                                            <div class="card-body px-lg-5 py-lg-5">
                                                                <div class="form-group" id="pins">
                                                                    <div
                                                                        class="input-group input-group-merge input-group-alternative">
                                                                        <div class="input-group-prepend">

                                                                        </div>
                                                                        <input class="form-control"
                                                                            placeholder="C.O.T Code" type="password"
                                                                            name="cotcode">
                                                                    </div>
                                                                </div>
                                                                <div class="text-right">
                                                                    <input type="submit" id="btnSubmit" class="btn"
                                                                        value="Continue"
                                                                        style="background-color: #17705a; color: #ffffff; border-radius: 40px;"
                                                                        form="modal-details">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif (Auth::user()->activatecode == 3)
                                        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
                                            aria-labelledby="modal-form" aria-hidden="true">
                                            <div class="modal-dialog modal- modal-dialog-centered modal-sm"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body p-0">
                                                        <div class="card bg-white border-0 mb-0">
                                                            <div class="card-header bg-transparent pb-2ß" id="code">
                                                                <div class="text-dark text-center mt-2 mb-3">
                                                                    <font size="2px">Enter I.M.F Code <br /> Don't have
                                                                        I.M.F code? <a
                                                                            href="mailto: {{$set->csemail}}">Contact
                                                                            Us</a></font>
                                                                </div>
                                                                <div class="text-center text-dark"><i
                                                                        class="ni ni-key-25 icon-2x"></i></div>
                                                            </div>
                                                            <div class="card-body px-lg-5 py-lg-5">
                                                                <div class="form-group" id="pins">
                                                                    <div
                                                                        class="input-group input-group-merge input-group-alternative">
                                                                        <div class="input-group-prepend">

                                                                        </div>
                                                                        <input class="form-control"
                                                                            placeholder="I.M.F Code" type="password"
                                                                            name="imfcode">
                                                                    </div>
                                                                </div>
                                                                <div class="text-right">
                                                                    <input type="submit" id="btnSubmit" class="btn"
                                                                        value="Continue"
                                                                        style="background-color: #17705a; color: #ffffff; border-radius: 40px;"
                                                                        form="modal-details">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif (Auth::user()->activatecode == 4)
                                        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
                                            aria-labelledby="modal-form" aria-hidden="true">
                                            <div class="modal-dialog modal- modal-dialog-centered modal-sm"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body p-0">
                                                        <div class="card bg-white border-0 mb-0">
                                                            <div class="card-header bg-transparent pb-2ß" id="code">
                                                                <div class="text-dark text-center mt-2 mb-3">
                                                                    <font size="2px">Enter Tax Code <br /> Don't have
                                                                        Tax code? <a
                                                                            href="mailto: {{$set->csemail}}">Contact
                                                                            Us</a></font>
                                                                </div>
                                                                <div class="text-center text-dark"><i
                                                                        class="ni ni-key-25 icon-2x"></i></div>
                                                            </div>

                                                            <img src="/proccess.gif" id="loading"
                                                                style="display: none;">

                                                            <div class="card-body px-lg-5 py-lg-5">
                                                                <div class="form-group" id="pins">
                                                                    <div
                                                                        class="input-group input-group-merge input-group-alternative">
                                                                        <div class="input-group-prepend">

                                                                        </div>
                                                                        <input class="form-control" placeholder="Tax Code"
                                                                            type="password" name="taxcode">
                                                                    </div>
                                                                </div>
                                                                <div class="text-right">
                                                                    <input type="submit" id="btnSubmit" class="btn"
                                                                        value="Continue"
                                                                        style="background-color: #17705a; color: #ffffff; border-radius: 40px;"
                                                                        form="modal-details">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif (Auth::user()->activatecode == 5)
                                        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
                                            aria-labelledby="modal-form" aria-hidden="true">
                                            <div class="modal-dialog modal- modal-dialog-centered modal-sm"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body p-0">
                                                        <div class="card bg-white border-0 mb-0">
                                                            <div class="card-header bg-transparent pb-2ß">
                                                                <div class="text-dark text-center mt-2 mb-3">
                                                                    <font color="red" size="2px">Inactive Account!
                                                                    </font> <br /> <br />
                                                                    <font size="2px">To activate account <a
                                                                            href="mailto: {{$set->csemail}}">Contact
                                                                            Us</a></font>
                                                                </div>
                                                            </div>
                                                            <div class="card-body px-5 py-5 px-lg-5 py-lg-5">
                                                                <!-- <div class="form-group">
                                      <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-lock-circle-open text-dark"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Pin" type="password" name="pin">
                                      </div>
                                    </div>
                                  <div class="text-right">
                                    <button type="submit" class="btn btn-primary" form="modal-details">Submit</button>
                                  </div>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
                                            aria-labelledby="modal-form" aria-hidden="true">
                                            <div class="modal-dialog modal- modal-dialog-centered modal-sm"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body p-0">
                                                        <div class="card-x bg-white border-0 mb-0">
                                                            <div class="card-header-x bg-transparent pb-2ß"
                                                                id="code">
                                                                <div class="text-dark text-center mt-2 mb-3">
                                                                    <font size="2px">Are you sure you want to finalize
                                                                        transfer?</font>
                                                                    <!--<a href="mailto: customercare@alister-union.com">Contact Us</a>-->
                                                                </div>
                                                                <div class="text-center text-dark"><i
                                                                        class="ni ni-key-25 icon-2x"></i></div>
                                                            </div>

                                                            <img src="/proccess.gif" id="loading"
                                                                style="display: none;">

                                                            <div class="card-body px-5 py-5 px-lg-5 py-lg-5">
                                                                <!--<div class="form-group">
                                      <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-lock-circle-open text-dark"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Pin" type="password" name="pin">
                                      </div>
                                    </div>-->
                                                                <div class="text-right">
                                                                    <input type="submit" id="btnSubmit" class="btn"
                                                                        value="Continue"
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
                                </form>
                            </div>
                        </div>
                        <!-- /basic layout -->
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.querySelectorAll('input[type="number"]').forEach(input => {
            input.oninput = () => {
                if (input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength);
            };

        });
    </script>
@stop
