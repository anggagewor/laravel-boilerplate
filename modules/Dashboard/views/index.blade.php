@extends('veltrix::layouts.master')
@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Dashboard</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Welcome to Veltrix Dashboard</li>
    </ol>
</div>
@endsection
@section('content')
<div class="row">
<div class="col-xl-4">
    <div class="card">
        <div class="card-body">
            <h4 class="mt-0 header-title mb-4">Chat</h4>
            <div class="chat-conversation">
                <ul class="conversation-list slimscroll" style="max-height: 400px;">
                    <li class="clearfix">
                        <div class="chat-avatar">
                            <img src="{{ URL::asset('vendor/modules/veltrix/assets/images/users/user-2.jpg') }}" alt="male">
                            <span class="time">10:00</span>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <span class="user-name">John Deo</span>
                                <p>
                                    Hello!
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="clearfix odd">
                        <div class="chat-avatar">
                            <img src="{{ URL::asset('vendor/modules/veltrix/assets/images/users/user-3.jpg') }}" alt="Female">
                            <span class="time">10:01</span>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <span class="user-name">Smith</span>
                                <p>
                                    Hi, How are you? What about our next meeting?
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="chat-avatar">
                            <img src="{{ URL::asset('vendor/modules/veltrix/assets/images/users/user-2.jpg') }}" alt="male">
                            <span class="time">10:04</span>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <span class="user-name">John Deo</span>
                                <p>
                                    Yeah everything is fine
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="clearfix odd">
                        <div class="chat-avatar">
                            <img src="{{ URL::asset('vendor/modules/veltrix/assets/images/users/user-3.jpg') }}" alt="male">
                            <span class="time">10:05</span>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <span class="user-name">Smith</span>
                                <p>
                                    Wow that's great
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="clearfix odd">
                        <div class="chat-avatar">
                            <img src="{{ URL::asset('vendor/modules/veltrix/assets/images/users/user-3.jpg') }}" alt="male">
                            <span class="time">10:08</span>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <span class="user-name mb-2">Smith</span>

                                <img src="{{ URL::asset('vendor/modules/veltrix/assets/images/small/img-1.jpg') }}" alt="" height="48px"
                                    class="rounded mr-2">
                                <img src="{{ URL::asset('vendor/modules/veltrix/assets/images/small/img-2.jpg') }}" alt="" height="48px"
                                    class="rounded">
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-sm-9 col-8 chat-inputbar">
                        <input type="text" class="form-control chat-input" placeholder="Enter your text">
                    </div>
                    <div class="col-sm-3 col-4 chat-send">
                        <button type="submit" class="btn btn-success btn-block">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('script')
@endsection
