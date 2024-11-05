@extends('userlayout')

@section('content')
<main class="page-content" style="margin-top:40px">
<div class="container-fluid mt--6">
  <div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="card-x bg-white">
        <div class="card-body-x">

            <h3 class="text-center">Inter Transfer</h3>
            <h3 class="text-center">{{$user->Currency}}{{number_format($amount)}}</h3>


            <div class="conspbtw" style="width: 50%; margin: auto;">
                <div class="lefutu">
                    <span>Amount: </span><br />
                <span>Account number: </span><br />
                <span>Name: </span><br />
                <span>Bank Name: </span><br />
                <span>Transfer fee: </span><br />
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

          <br>
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