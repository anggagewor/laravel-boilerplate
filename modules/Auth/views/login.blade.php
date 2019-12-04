@extends('veltrix::layouts.master-blank')

@section('content')

<div class="wrapper-page">
    <div class="card overflow-hidden account-card mx-3">
        <div class="bg-primary p-4 text-white text-center position-relative">
            <h4 class="font-20 m-b-5">Welcome Back !</h4>
            <p class="text-white-50 mb-4">Sign in to continue to Veltrix.</p>
            <a href="#" class="logo logo-admin"><img src="{{ URL::asset('vendor/modules/veltrix/assets/images/logo-sm.png') }}" height="24"
                    alt="logo"></a>
        </div>
        <div class="account-card-content">
            <form class="form-horizontal m-t-30" action="{{route('auth.post.login')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Enter username">
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="userpassword">Password</label>
                    <input type="password" name="password" class="form-control @error('username') is-invalid @enderror" id="userpassword" placeholder="Enter password">@error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row m-t-20">
                    <div class="col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>

                <div class="form-group m-t-10 mb-0 row">
                    <div class="col-12 m-t-20">
                        <a href="pages-recoverpw"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="m-t-40 text-center">
        <p>Don't have an account ? <a href="{{ route('auth.register')}}" class="font-500 text-primary"> Signup now </a> </p>
        <p>&copy; {{date('Y')}} Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
    </div>

</div>
<!-- end wrapper-page -->
@endsection

@section('script')
@endsection
