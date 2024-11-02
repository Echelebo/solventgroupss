@extends('userlayout')

@section('content')
<main class="page-content" style="margin-top:40px">
<div class="container-fluid mt--6">
  <div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="card-x bg-white">
        <div class="card-body-x">
          <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
            <div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6" style="float:left ">

                <span>Amount: </span>
                <span>Account number: </span>
                <span>Name: </span>
                <span>Bank Name: </span>
                <span>Transfer fee: </span>
                <span>Total: </span>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6" style="float:right ">
                <span class="font-weight-semibold">{{$user->Currency}}{{number_format($amount)}}</span>
                <span class="font-weight-semibold">{{$acct_no}}</span>
                <span class="font-weight-semibold">{{$acct_name}}</span>
                <span class="font-weight-semibold">{{$bank}}</span>
                <span class="font-weight-semibold">{{$user->Currency}}{{number_format($amount*$set->transfer_charge/100)}}</span>
                <span class="font-weight-semibold">{{$user->Currency}}{{number_format($amount+($amount*$set->transfer_charge/100))}}</span>

                    </div>
                </div>
            </div>
          </div><br>
          <form action="{{route('submit.otherpreview')}}" method="post">
            @csrf
            <input type="hidden" name="acct_no" value="{{$acct_no}}">
            <input type="hidden" name="bank" value="{{$bank}}">
            <input type="hidden" name="amount" value="{{$amount}}">
            <label>Check your email for One Time Password</label><br>
            <div class="form-group row">
                  <div class="col-lg-10">
                    <div class="input-group">

                      <input type="text" name="otp" value="" placeholder="Insert OTP" class="form-control" required>
                    </div>
                  </div>
                </div><br><br>
            <button type="submit" class="btn btn-sm" style="background-color: #17705a; color: #ffffff;">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </main>
@stop