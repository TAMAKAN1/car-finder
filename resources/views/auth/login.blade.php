@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-6" style="margin-top:15% !important;direction:rtl">
            <div class="card-body">
                <div class="justify-content-center" style="margin-bottom:5%">
                    <center>
                        <img src="{{asset('assets/images/xs/avatar1.jpg')}}" alt="" class="img-fluid text-center">

                    </center>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror p-4" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="البريد الإلكتروني">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-md-12">
                            <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror p-4" name="password" required autocomplete="current-password" placeholder="كلمه السر" style="font-size:20" >

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12 ">
                            @if (Route::has('password.request'))
                            <center>
                                <a class="btn btn-link text-dark text-center mb-2"  href="{{ route('password.request') }}">
                                 <strong>   {{ __('إعادة تعيين كلمة المرور') }}</strong>
                                </a>
                            </center>
                            @endif


                        </div>
                    </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-12  mt-4  ">
                            <button type="submit" class="btn w-100 p-2 text-white" style="font-size:18px;background:black;border-radius:15px">
                                {{ __('تسجيل الدخول') }}
                            </button>


                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{asset('img/login.png')}}" class="img-fluid w-100 h-100" alt="">
        </div>
    </div>
</div>
@endsection


