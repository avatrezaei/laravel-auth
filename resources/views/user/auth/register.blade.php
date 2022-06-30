@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
    <div class="demo-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="text-center image-size-small position-relative">
                        <img src="https://icons.iconarchive.com/icons/designbolts/free-male-avatars/128/Male-Avatar-Cool-Cap-icon.png"
                            class="rounded-circle p-2 bg-white">
                    </div>
                    <div class="p-5 bg-white rounded shadow-lg">
                        <h3 class="mb-2 text-center pt-5">Sign Up</h3>
                        <p class="text-center lead">Create new account</p>
                        <form action="{{ route('user.register') }}" class="mt-4" method="post">
                            @csrf
                            <label class="font-500">@lang('Name')</label>
                            <input name="name" class="form-control form-control-lg mb-3" type="text">

                            <label class="font-500">@lang('User Name')</label>
                            <input name="username" class="form-control form-control-lg mb-3" type="text">

                            <label class="font-500">@lang('Email')</label>
                            <input name="email" class="form-control form-control-lg mb-3" type="email">

                            <label class="font-500">@lang('Password')</label>
                            <input name="password" class="form-control form-control-lg" type="password">

                            <label class="font-500">@lang('Password Confirm')</label>
                            <input name="password_confirmation" class="form-control form-control-lg" type="password">

                            <br>
                            <button class="btn btn-primary btn-lg w-100 shadow-lg">@lang('Signup Now')</button>
                        </form>
                        <div class="text-center pt-4">
                            <p class="m-0">@lang('Haven an account?')<a href="{{ route('user.login') }}"
                                    class="text-dark font-weight-bold">@lang('Sign In')</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
