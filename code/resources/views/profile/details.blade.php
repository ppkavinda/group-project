<h3 class="w3l_header mt-4 mb-5">Edit your details</h3>
<div class="row">
    <div class="col-md-6">
        <form action="/users/{{ auth()->user()->id }}/edit" method="POST">
            @csrf
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="staticEmail" value="{{ auth()->user()->email }}">
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputName" value="{{ auth()->user()->name }}" placeholder="Name">
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNic" class="col-sm-2 col-form-label">NIC</label>
                <div class="col-sm-10">
                    <input type="text" name="nic" class="form-control" id="inputNic" value="{{ auth()->user()->nic }}" placeholder="Nic">
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                </div>
            </div>
            <input type="submit" class="btn offset-md-2 btn-primary" value="Save">
        </form>
    </div>
    <div class="col-md-6">
        {{-- <center> --}}
        <div class="card mx-auto" style="width: 25rem;">
            <center>
                <img class="card-img-top rounded-circle d-block" src="/dist/img/avatar5.png" alt="Card image cap">
            </center>
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">{{ auth()->user()->description ?? 'Say something about you...' }}</p>
            </div>
        </div>
        {{-- </center> --}}
    </div>
</div>