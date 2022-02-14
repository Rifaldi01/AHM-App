@extends('layouts.app')

@section('content')
<div id="wrapper">
    <div
        class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
        <div class="card-body">
            <div class="card-content p-2">
                <div class="text-center">
                    <img src="{{ asset('assets-2/images/logo-icon.png') }}">
                </div>
                <div class="card-title text-uppercase text-center py-3">Sign In</div>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="position-relative has-icon-right">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control form-control-rounded @error('email')
                                is-invalid
                            @enderror" placeholder="Email">
                            <div class="form-control-position">
                                <i class="icon-user"></i>
                            </div>
                        </div>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="position-relative has-icon-right">
                            <label for="exampleInputPassword" class="sr-only">Password</label>
                            <input type="password" name="password" id="exampleInputPassword" class="form-control @error('password')
                            is-invalid
                        @enderror form-control-rounded" placeholder="Password">
                            <div class="form-control-position">
                                <i class="icon-lock"></i>
                            </div>
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mr-0 ml-0">
                        <div class="form-group col-6">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="user-checkbox" checked="" />
                                <label for="user-checkbox">Ingatkan saya</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit"
                        class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">Masuk</button>
                </form>
            </div>
        </div>
    </div>

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
</div>
@endsection
