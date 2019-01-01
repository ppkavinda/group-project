@extends('study.master')

@section('content')

@include('study.partials.banner')

	<div class="contact">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header1">Get in <span>Touch</span></h3>
			<div class="w3layouts_mail_grid row">
				<div class="col-md-4 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Mail Us</h3>
						<a href="mailto:info@example.com">info@example.com</a>
					</div>
				</div>
				<div class="col-md-4 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Address</h3>
						<p>Vijatha Center, Divisional Secretariat, Udawaththa Road, Malabe</p>
					</div>
				</div>
				<div class="col-md-4 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Phone</h3>
						<p><a href= tel:+940112561021>(+94)0112561021</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="contact">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header1">Inquiry <span>Info</span></h3>
			<div class="w3layouts_mail_grid">
				<div class="agileits_mail_grid_right agileits_w3layouts_mail_grid_right">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
						<form action="/inquiry" method="post">
						@csrf
							<span>
								<i>Name</i>
								<input type="text" name="name" placeholder=" Enter your name " required="">
							</span>
							<span>
								<i>Email</i>
								<input type="email" name="email" placeholder="Enter vaild e-mail" required="">
							</span>
							<span>
								<i>Subject</i>
								<input type="text" name="subject" placeholder=" " required="">
							</span>
							<span>
								<i>Message</i>
								<textarea name="message" placeholder=" " required=""></textarea>

							</span>
							<input type="submit" value="SUBMIT">
						</form>
					</div>
				</div>
				<div class="col-md-6 agileits_mail_grid_left agileinfo_mail_grid_left">
					<div class="agileits_mail_grid_lft_grid wthree_mail_grid_lft_grid">
						<h4><span>Prabashvara Blog</span></h4>
						<ul>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="http://vidathanet.blogspot.com/">Prabashvara</a></li>
							
			</div>
		</div>
	</div>
	
@endsection