@extends('userlayout')

@section('content')
    <!-- Page content -->
    <main class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-8">
                    <div class=" modal-account">
                        <div class="modal__overlay" data-dismiss="modal"></div>
                        <!-- <div class="modal__wrap"> -->
                        <div class="modal__window">
                            <div class="modal__content">
                                <!-- <button class="modal__close" data-dismiss="modal">
                                <svg class="icon-icon-cross">
                                    <use xlink:href="#icon-cross"></use>
                                </svg>
                            </button> -->

                                <!-- <a class="modal__close text-danger">
                                        <svg class="icon-icon-help">
                                                <use xlink:href="#icon-help"></use>
                                            </svg>
                                     </a> -->
                                <div class="modal__body">


                                    <div class="modal-account__pane-header"
                                        style="background-color:#17705a; padding:10px;">
                                        <h4 style="color: #ffffff; font-size:18px">Cash Deposit</h4>
                                    </div>

                                    <h6 class="ml-4 text-danger">Use the below account information to make deposit. kindly
                                        inform the customer billing department by opening a support ticket after payment
                                        stating clearly your deposit details for approval</h6>
                                    <div class="modal-account__right tab-content">
                                        <div class="modal-account__pane tab-pane show active" id="accountDetails">
                                            <div class="row row--md">
                                                <div class="col-12">
                                                    <div class="row row--md">
                                                        <table class="depo">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Bank Name</td>
                                                                    <td class="pl-4">{{ $bank->acct_no }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bank Address</td>
                                                                    <td class="pl-4">150 York Rd, Hartlepool TS26 9DZ,
                                                                        United Kingdom</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Account No</td>
                                                                    <td class="pl-4">Click <a class="text-success"
                                                                            href="mailto:{{$set->csemail}}">Request
                                                                            Account Number</a> to contact Customer Billing
                                                                        Department for account information</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Iban</td>
                                                                    <td class="pl-4">{{ $bank->iban }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Swift Code</td>

                                                                    <td class="pl-4">{{ $bank->swift }}</td>
                                                                </tr>
                                                            </tbody>

                                                        </table>
                                                    </div>
                                                </div>



                                                <div class="col-md-8"><br /><br />
                                                    <div class="card-x">
                                                        <div class="card-header-x header-elements-inline">
                                                            <h3 class="mb-0">Upload proof</h3>
                                                            <div class="header-elements">
                                                            </div>
                                                        </div>
                                                        <div class="card-body-x">
                                                            <form method="post" action="{{ route('bank_transfersubmit') }}"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group row">
                                                                    <div class="col-lg-12">
                                                                        <div class="input-group">
                                                                            <span class="input-group-prepend">
                                                                                <span
                                                                                    class="input-group-text">{{ $user->Currency }}</span>
                                                                            </span>
                                                                            <input type="number" step="any"
                                                                                name="amount" max-length="10"
                                                                                class="form-control" placeholder="amount">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-lg-12">
                                                                        <textarea type="text" class="form-control" rows="3" placeholder="Details" name="details" required></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input"
                                                                            id="customFileLang1" name="image"
                                                                            lang="en">
                                                                        <label class="custom-file-label"
                                                                            for="customFileLang1">Bank proof</label>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <div class="text-right">
                                                                                <button type="submit"
                                                                                    style="background-color: #17705a;"
                                                                                    class="btn">Proceed</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>




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
    </main>
@stop
