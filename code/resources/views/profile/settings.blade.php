<!-- Membership upgrade -->
<h3 class="w3l_header mt-4 mb-5">Account <span>settings</span></h3>
<div class="row">
    <div class="col-md-6">
        @if (!auth()->user()->isFacilitator())
        @if(session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <div class="card m-3">
                <h5 class="card-header">Upgrade Membership</h5>
                <form class="card-body" action="/promotion" method="post">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="newRole">Register as a </label>
                        <select name="role" class="form-control col-md-5" id="newRole">
                            <option>Select one...</option>
                            <option value="2">Facilitator</option>
                                @if (!auth()->user()->isEntrepreneur())
                                    <option value="3">Entrepreneur</option>
                                @endif
                        </select>
                        <button class="btn btn-primary" type="submit">Request</button>
                    </div>
                </form>
            </div>
        @endif
    </div>
</div>    
<!-- Change password -->
<div class="row">
    <div class="col-md-6">
        <div class="card m-3">
            @if(session('msg'))
                <div class="alert alert-info">  {{session('msg')}}</div>
             @endif
            <h5 class="card-header"><span style='color:green'>{{ucwords(Auth::user()->name)}}</span>, Update your Password</h5>
                <form class="card-body" action="/updatePassword" method="post">   
                 {{ csrf_field() }}
                     <div class="form-group row">
                        <label for="example-text-input">Current Password</label>
                        <input class="form-control" type="password"  name="oldPassword">
                        <span style="color:red">{{ $errors->first('old_password') }}</span>
                        <br>
                        <label for="example-text-input" >New Password</label>
                        <input class="form-control" type="password"  name="newPassword">
                        <span style="color:red">{{ $errors->first('newPassword') }}</span>
                        <br>
                        <div align="right" class="form-group pt-3"> 
                            <input type="submit" value="Update Password" class="btn btn-primary">
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>

@push('styles')
<style>
    table td { padding:10px}
</style>
@endpush