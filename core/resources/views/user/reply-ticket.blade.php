@extends('userlayout')

@section('content')
    <main class="page-content" style="margin-top:40px">
        <div class="container-fluid mt--6">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-x bg-white">
                            <div class="card-body--x">
                                <div class="">
                                    <h3 class="">Customer support</h3>
                                    <a data-toggle="modal" data-target="#modal-formx" href=""
                                        class="btn btn-sm btn-neutral"><i class="fa fa-arrow-right"></i> Create new
                                        request</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-x shadow">
                            <div class="card-header-x px-5 py-5 bg-transparent">
                                <h3 class="mb-0">Log</h3>
                            </div>
                            <div class="card-body-x">
                                <div class="timeline timeline-one-side px-5 py-5" data-timeline-content="axis"
                                    data-timeline-axis-style="dashed">
                                    <div class="timeline-block">
                                        <span class="timeline-step badge-primary">
                                            <i class="ni ni-like-2"></i>
                                        </span>
                                        <div class="timeline-content">
                                            <small
                                                class="font-weight-bold">{{ date('Y/m/d h:i:A', strtotime($ticket->created_at)) }}</small>
                                            <h5 class="mt-3 mb-0">{{ $ticket->message }}</h5>
                                            <p class="text-sm mt-1 mb-0">Admin</p>
                                        </div>
                                    </div>
                                    @foreach ($reply as $df)
                                        @if ($df->status == 1)
                                            <div class="timeline-block">
                                                <span class="timeline-step badge-primary">
                                                    <i class="ni ni-like-2"></i>
                                                </span>
                                                <div class="timeline-content">
                                                    <small
                                                        class="font-weight-bold">{{ date('Y/m/d h:i:A', strtotime($df->created_at)) }}</small>
                                                    <h5 class="mt-3 mb-0">{{ $df->reply }}</h5>
                                                    <p class="text-sm mt-1 mb-0">Admin</p>
                                                </div>
                                            </div>
                                        @elseif($df->status == 0)
                                            <div class="timeline-block">
                                                <span class="timeline-step badge-primary">
                                                    <i class="ni ni-like-2"></i>
                                                </span>
                                                <div class="timeline-content">
                                                    <small
                                                        class="font-weight-bold">{{ date('Y/m/d h:i:A', strtotime($df->created_at)) }}</small>
                                                    <h5 class="mt-3 mb-0">{{ $df->reply }}</h5>
                                                    <p class="text-sm mt-1 mb-0">User</p>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card-x">
                            <div class="card-header-x px-5 py-5 header-elements-inline">
                                <h3 class="mb-0">Reply</h3>
                            </div>

                            <div class="card-body-x">
                                <form action="{{ url('user/reply-ticket') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <textarea name="details" class="form-control no-border" rows="4" required></textarea>
                                            <input name="id" value="{{ $ticket->ticket_id }}" type="hidden">
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn" style="background-color: #DC1414;">Send<i
                                                class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form"
                            aria-hidden="true">
                            <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="card-x bg-white border-0 mb-0">
                                            <div class="card-body-x px-5 py-5 px-lg-5 py-lg-5">
                                                <form action="{{ route('submit-ticket') }}" method="post">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-2">Subject</label>
                                                        <div class="col-lg-10">
                                                            <div class="input-group input-group-merge">
                                                                <input type="text" name="subject" maxlength="10"
                                                                    class="form-control" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-2">Priority</label>
                                                        <div class="col-lg-10">
                                                            <select class="form-control select" name="category"
                                                                data-dropdown-css-class="bg-slate-800" data-fouc required>
                                                                <option value="Low">Low</option>
                                                                <option value="Medium">Medium</option>
                                                                <option value="High">High</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-2">Details</label>
                                                        <div class="col-lg-10">
                                                            <textarea name="details" class="form-control" rows="4" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit" style="background-color: #DC1414;"
                                                            class="btn">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
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
