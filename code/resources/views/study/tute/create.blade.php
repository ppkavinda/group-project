@extends('study.master')

@section('content')

{{-- @include('study.partials.banner') --}}

<div class="contact">
  <div class="container">
	<h3 class="w3l_header w3_agileits_header">Add new <span>Video Tutorial</span></h3>
			<div class="inner_w3l_agile_grids-gal">
                {{-- <form method="POST" action="/tute/create" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="staticTitle" class="col-sm-2 col-form-label">Video Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="staticTitle" name="title" required>
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="video" class="col-sm-2 col-form-label">Video</label>
                      <div class="col-sm-10">
                           <input type="file" class="form-control-file" name="video" id="video" accept="video/*" aria-describedby="fileHelpId" required>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticTitle" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="description" id="" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticTitle" class="col-sm-2 col-form-label">Tags</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="staticTitle" name="tags" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3 offset-sm-2">
                            <input type="submit" class="form-control btn btn-primary " id="staticTitle" required>
                        </div>
                    </div>
                </form> --}}
            </div>
            <div class="agileits_mail_grid_right agileits_w3layouts_mail_grid_right">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
                        @include('study.partials.errors')
                        <form method="POST" action="/tute/create" enctype="multipart/form-data">
                            @csrf
							<span>
								<i>Title</i>
								<input type="text" name="title" >
							</span>
							<span>
								<i>Tags</i>
								<input type="text" name="tags" required>
							</span>
							<span style="margin-bottom:1em;">
								<i>Video</i>
                                <input style="margin-left:2em;" type="file" name="video" id="video" accept="video/*" aria-describedby="fileHelpId" >
							</span>
							<span>
								<i>Description</i>
								<textarea name="description" required></textarea>
							</span>
							<input type="submit" value="SUBMIT">
						</form>
					</div>
				</div>
		</div>	
	</div>

@endsection