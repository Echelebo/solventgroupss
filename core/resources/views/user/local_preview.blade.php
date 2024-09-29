@extends('userlayout')

@section('content')
<main class="page-content" style="margin-top:40px">
<div class="container-fluid mt--6">
  <div class="content-wrapper">
  <div class="row">
    <div class="col-lg-6">
      <div class="card-x bg-white">
        <div class="card-body-x">
          <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
            <div>
              <ul class="list list-unstyled mb-0">
                <li>Amount: <span class="font-weight-semibold">{{$user->Currency}}{{number_format($amount)}}</span></li>
                <li>Account number: <span class="font-weight-semibold">{{$acct_no}}</span></li>
                <li>Name: <span class="font-weight-semibold">{{$acct_name}}</span></li>
                <li>Bank Name: <span class="font-weight-semibold">{{$bank}}</span></li>
                <li>Transfer fee: <span class="font-weight-semibold">{{$user->Currency}}{{number_format($amount*$set->transfer_charge/100)}}</span></li>
                <li>Total: <span class="font-weight-semibold">{{$user->Currency}}{{number_format($amount+($amount*$set->transfer_charge/100))}}</span></li>
              </ul>
            </div>
          </div><br>
          <form action="{{route('submit.localpreview')}}" method="post">
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
            <button type="submit" class="btn btn-sm" style="background-color: #DC1414;">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </main>
@stop