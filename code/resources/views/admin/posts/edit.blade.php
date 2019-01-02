@extends('admin.master')

@section('content')
<div class="content-wrapper">
<div class="contact">
  <div class="container-wide">
	<h3 class="w3l_header w3_agileits_header">Add new <span>post</span></h3>
        <div class="inner_w3l_agile_grids-gal">
            <div class="agileits_mail_grid_right agileits_w3layouts_mail_grid_right">
                <div class="agile_mail_grid_right1">
                    <post-editor initial-post="{{ $post }}"></post-editor>
                </div>
            </div>
        </div>
    </div>
</div>
</diV>

@endsection
