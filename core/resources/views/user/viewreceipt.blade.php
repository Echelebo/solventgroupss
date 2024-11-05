@extends('userlayout')

@section('content')
<main class="page-content" style="margin-top:40px">
<div class="container-fluid mt--6">
  <div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="card-x bg-white">
        <div class="card-body-x">

            <div class="text-center"><img src="{{url('/')}}/newee/img/mark.png" width="50" height="50" / ></div>
            <h4 class="text-center">Successful</h4>
            <h3 class="text-center"><b>{{$user->Currency}}{{number_format($amount)}}</b></h3>
<p>Kindly note the actual credit time subject to the bank.</p>


            <div class="text-right" style="margin-right: 120px">
                <br />
                <a href="#" data-toggle="modal" data-target="#modal-form" class="btn"
                    style="background-color: #17705a; color: #ffffff;">
                    <font size="2px">View Receipt</font><i class="icon-paperplane ml-2"></i>
                </a>
            </div>

            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
            aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-sm"
                role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card-x bg-white border-0 mb-0">
<div class="card-body-x p-5">
    @foreach ($reference as $hh)
                                <div class="conspbtw" style="width: 80%; margin: auto;">
                                    <div class="text-right">
                                    <img src="{{url('/')}}/asset/{{ $logo->image_link }}" width="150">
                                    div class="text-center"></div>
                                    <h3 class="text-center" style="color: #176f59;"><b>{{$user->Currency}}{{number_format($amount)}}</b></h3>
            <h4 class="text-center">Successful Transaction</h4>

<p>Kindly note the actual credit time subject to the bank.</p>

                                    <div class="lefutu">
                                    <span>Transaction Date: </span><br />
                                    <span>Debit Account: </span><br />
                                    <span>Name: </span><br />
                                    <span>Bank Name: </span><br />
                                    <span>Fee: </span><br />
                                    <span>Total: </span>
                                    </div>
                                    <div class="rightu">
                                        <span class="font-weight-semibold">{{$user->Currency}}{{number_format($amount)}}</span><br />
                                    <span class="font-weight-semibold">{{$acct_no}}</span><br />
                                    <span class="font-weight-semibold">{{$acct_name}}</span><br />
                                    <span class="font-weight-semibold">{{$bank}}</span><br />
                                    <span class="font-weight-semibold">{{$user->Currency}}{{number_format($amount*$set->transfer_charge/100)}}</span><br />
                                    <span class="font-weight-semibold">{{$user->Currency}}{{number_format($amount+($amount*$set->transfer_charge/100))}}</span>
                                    </div>
                                </div>
                                @endforeach

                            </div>

                </div>
            </div>
        </div>

        </div>
      </div>

  </div>
  </div>
  </div>
  </main>
@stop