
<h3 class="w3l_header mt-4 mb-5">Account <span>settings</span></h3>
<div class="row">
    <div class="col-md-6">
        @if (!auth()->user()->isFacilitator())
        <div class="card m-3">
                <h5 class="card-header">Upgrade Membership</h5>
                <form class="card-body" action="/inquery" method="post">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="newRole">Register as a </label>
                        <select name="role" class="form-control col-md-5" id="newRole">
                            <option>Select one...</option>
                            <option value="2">Facilitator</option>
                                @if (!auth()->user()->isEntrepreneur())
                                    <option value="1">Entrepreneur</option>
                                @endif
                        </select>
                        <button class="btn btn-primary" type="submit">Request</button>
                    </div>
                </form>
            </div>
        @endif
    </div>
    <div class="col-md-6">
        {{-- @if (auth()->user()->isFacilitator())
            <h5 class="m-3">Your Posts
                <a href="/posts/create" class="btn btn-primary ml-3">New Post</a>
            </h5>
            <ul class="list-group m-2">
                @foreach ($user->posts as $post)
                    <li class="list-group-item"><a href="posts/{{ $post->id }}/edit">{{ $post->title }}</a><br>
                        <small><a class="text-dark" href="posts/{{ $post->id }}"><i class="fa fa-eye"></i> View</a></small> |
                        <small><a class="text-dark" href="posts/{{ $post->id }}/edit"><i class="fa fa-edit"></i> Edit</a></small> |
                        <small><a class="text-danger" href="posts/{{ $post->id }}/delete"><i class="fa fa-remove"></i> Delete</a></small>
                    </li>
                @endforeach
            </ul>
        @else
            <h5 class="m-3">In order to publish posts in this site, you have to register as a <a href="#">Facilitator</a></h5>
        @endif --}}
    </div>
</div>


    <style>
    table td { padding:10px
    }</style>
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
                        <div align="right"> 
                            <input type="submit" value="Update Password" class="btn btn-primary">
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
