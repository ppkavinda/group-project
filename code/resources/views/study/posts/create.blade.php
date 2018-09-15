@extends('study.master')

@section('content')

{{-- @include('study.partials.banner') --}}

<div class="contact">
  <div class="container">
	<h3 class="w3l_header w3_agileits_header">Add new <span>post</span></h3>
			<div class="inner_w3l_agile_grids-gal">
            </div>
            <div class="agileits_mail_grid_right agileits_w3layouts_mail_grid_right">
					<div class="agile_mail_grid_right1">
                        {{-- @include('study.partials.errors') --}}
                        {{-- <form method="POST" action="/tute/create" enctype="multipart/form-data">
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
                        </form> --}}
                        <form action="/posts/create" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="postTitle" placeholder="Enter the Title">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="courseId" id="exampleFormControlSelect1">
                                    <option>Please select the course --</option>
                                    @foreach ($courses as $course)
                                        <option value="{{$course->id }}">{{ $course->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea name="postContent" id="summernote"></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </form>
					</div>
				</div>
		</div>	
	</div>

@endsection

@push('styles')
    {{-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet"> --}}
@endpush
@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
@endpush
@push('scripts')
  <script>
       $('#summernote').summernote({
        placeholder: 'Type your post here...',
        tabsize: 4,
        height: 500
      });
  </script>
@endpush
