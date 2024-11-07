@extends('userlayout')

@section('content')
<main class="page-content" style="margin-top:40px">
<div class="container-fluid mt--6">
  <div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="card-x bg-white">
        <div class="card-body-x">
            @foreach ($reference as $hh)
            <div class="text-center" style="width: 40px; margin: auto;" ><img src="{{url('/')}}/newe/img/mark.png" / >
            </div>
            <h4 class="text-center">Successful</h4>
            @if ($hh->type == 1)
            <h3 class="text-center"><b>{{$user->Currency}}{{number_format($hh->amount)}}</b></h3>
            @elseif($hh->type == 2)
            <h3 class="text-center"><b>{{$user->Currency}}{{number_format($hh->amount)}}</b></h3>
            @endif
<p class="text-center">@if ($hh->valuex == 1)
    {{ $hh->dates }}
@elseif($hh->valuex == 0)
    {{ $hh->created_at }}
@endif</p>


            <div class="text-right" style="margin-right: 120px; margin-top: 80px;">
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
                                <div class="conspbtw" style="width: 80%; margin: auto;">
                                    <div class="text-right">
                                    <img src="{{url('/')}}/asset/{{ $logo->image_link }}" width="150">
                                    </div>
                                    @if ($hh->type == 1)
            <h3 class="text-center"><b>{{$user->Currency}}{{number_format($hh->amount)}}</b></h3>
            @elseif($hh->type == 2)
            <h3 class="text-center"><b>{{$user->Currency}}{{number_format($hh->amount)}}</b></h3>
            @endif
            <h4 class="text-center">Successful Transaction</h4>

<p class="text-center">@if ($hh->valuex == 1)
    {{ $hh->dates }}
@elseif($hh->valuex == 0)
    {{ $hh->created_at }}
@endif</p>

                                    <div class="lefutu">
                                    @if ($hh->type == 1)
                                    <span>Sender: </span><br />
                                    <span>Recipient: </span><br />
                                    @elseif($hh->type == 2)
                                    <span>Recipient: </span><br />
                                    <span>Sender: </span><br />
                                    @endif
                                    @if ($hh->type == 1)
                                                                <span>Beneficiary Bank:</span><br />
                                                            @elseif($hh->type == 2)
                                                                <span>Sender Bank:</span><br />
                                                            @endif
                                    <span>Reference: </span><br />
                                    <span>Amount: </span><br />
                                    </div>
                                    <div class="rightu">
                                        @if ($hh->type == 1)
                                    <span>{{ $hh->account }}</span><br />
                                    <span>{{ $hh->sender_acctno }}</span><br />
                                    @elseif($hh->type == 2)
                                    <span>{{ $hh->account }}</span><br />
                                    <span>{{ $hh->sender_acctno }}</span><br />
                                    @endif
                                    <span>{{ $hh->sender_bankname }}</span><br />
                                    <span>{{ $hh->reference }}</span><br />
                                    <span>{{ $user->Currency }}{{ number_format($hh->amount, 2) }}</span><br />
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