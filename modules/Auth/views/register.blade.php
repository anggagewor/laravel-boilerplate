@extends('veltrix::layouts.master-blank')
@section('content')
<div class="home-btn d-none d-sm-block">
    <a href="index" class="text-dark"><i class="fas fa-home h2"></i></a>
</div>

<div class="wrapper-page">
    <div class="card overflow-hidden account-card mx-3">
        <div class="bg-primary p-4 text-white text-center position-relative">
            <h4 class="font-20 m-b-5">Free Register</h4>
            <p class="text-white-50 mb-4">Get your free Veltrix account now.</p>
            <a href="#" class="logo logo-admin"><img src="{{ URL::asset('vendor/modules/veltrix/assets/images/logo-sm.png') }}" height="24"
                    alt="logo"></a>
        </div>
        <div class="account-card-content">

            <form class="form-horizontal m-t-30" action="{{route('auth.post.register')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">{{ __('Fullname') }}</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter Fullname">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="useremail">{{ __('E-Mail Address') }}</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="useremail" name="email" placeholder="Enter email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="username">{{ __('Username') }}</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Enter username">
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="userpassword">{{ __('Password') }}</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" name="password" placeholder="Enter password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="userpassword">{{ __('Confirm Password') }}</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" name="password_confirmation" placeholder="Enter password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>

                <div class="form-group row m-t-20">
                    <div class="col-12 text-right">
                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                    </div>
                </div>

                <div class="form-group m-t-10 mb-0 row">
                    <div class="col-12 m-t-20">
                        <p class="mb-0">By registering you agree to the Veltrix <a href="#" class="text-primary">Terms
                                of Use</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="m-t-40 text-center">
        <p>Already have an account ? <a href="{{ route('auth.login')}}" class="font-500 text-primary"> Login </a> </p>
        <p>&copy; {{date('Y')}} Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
    </div>

</div>
<!-- end wrapper-pags -->
@endsection

@section('script')
@endsection
