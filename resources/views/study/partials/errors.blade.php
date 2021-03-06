@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        @foreach ($errors->all() as $error)
            <strong>&#9679;</strong> {{ $error }} <br>
        @endforeach
    </div>
@endif