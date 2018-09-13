@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<<<<<<< HEAD
<h1>Home </h1>
<h2><span class="fa fa-asterisk"></span> => <a href="/admin">/admin</a></h2>
<h2><span class="fa fa-key"></span> => <a href="/login">/login</a></h2>
<h2><span class="fa fa-key" ></span> => <a href="/register">/register</a></h2>
<h2><span class="fa fa-shopping-bag"></span> => <a href="/shop">/shop</a></h2>
<h2><span class="fa fa-pencil"></span> => <a href="/study">/study</a></h2>
<h2><span class="fa fa-pencil"></span> => <a href="/the">/study</a></h2>
=======
                    You are logged in!
>>>>>>> b3a5c5fbb28041088bab468f7c1c4ee9f29bf6b1

                    {{ Auth::user()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
