@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center"> 
        <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <p class="login-box-msg" style="color:DodgerBlue;font-size:160%;"><b>Sign Up and Start Learning!</b></p>
                    </div>

                    <div class="login-logo">
                        <a href="/"><img src="/dist/img/logo.jpg" alt="logo" style="width: 30%; opacity: .6"></a>
                    </div>
                  <register></register>
                  @yield('content')

                </div>
        </div>
    </div>
</div>
@endsection
