@extends('study.master')

@section('content')

<div class="contact">
  <div class="container">
	<h3 class="w3l_header w3_agileits_header">Add new <span>post</span></h3>
			<div class="inner_w3l_agile_grids-gal">
            </div>
            <div class="agileits_mail_grid_right agileits_w3layouts_mail_grid_right">
					<div class="agile_mail_grid_right1">
                        <form action="/posts/{{ $post->id }}/update" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="postTitle">Title</label>
                                <input type="text" class="form-control" value="{{ $post->title }}" name="postTitle" placeholder="Enter the Title">
                            </div>
                            <div class="form-group">
                                <label class="label-control" for="courseId">Course:</label>
                                <select class="form-control" name="courseId" id="exampleFormControlSelect1">
                                    <option>Please select the course --</option>
                                    @foreach ($courses as $course)
                                        <option {{ ($post->course_id == $course->id) ? 'selected' : '' }} value="{{$course->id }}">{{ $course->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                  <textarea class="form-control" name="description" rows="3" placeholder="Enter a short description ...">{{ $post->description }}</textarea>
                                </div>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
@endpush
@push('scripts')
<script>
    $(document).ready(function() {
        //initialize summernote
        $('#summernote').summernote({
            placeholder: 'Type your post here...',
            tabsize: 4,
            height: 500
        });

        //assign the variable passed from controller to a JavaScript variable.
        var content = {!! json_encode($post->body) !!};

        //set the content to summernote using `code` attribute.
        $('#summernote').summernote('code', content);
    });
</script>
@endpush

