@extends('study.master')

@section('content')

@include('study.partials.banner')

	<div class="contact ">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header1">Get in <span>Touch</span></h3>
			<div class="w3layouts_mail_grid row">
				<div class="col-md-4 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Mail Us</h3>
						<a href="vidathaKaduwela@gmail.com">info@example.com</a>
					</div>
				</div>
				<div class="col-md-4 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Address</h3>
						<p>Vidatha Kaduwela, Sri Lanka</p>
					</div>
				</div>
				<div class="col-md-4 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Phone</h3>
						<p>+(0121) 121 121</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class=src="https://www.google.com/maps/place/Divisional+Secretariat+Kaduwela+%E0%B6%9A%E0%B6%A9%E0%B7%94%E0%B7%80%E0%B7%99%E0%B6%BD+%E0%B6%B4%E0%B7%8A%E2%80%8D%E0%B6%BB%E0%B7%8F%E0%B6%AF%E0%B7%9A%E0%B7%81%E0%B7%93%E0%B6%BA+%E0%B6%BD%E0%B7%9A%E0%B6%9A%E0%B6%B8%E0%B7%8A+%E0%B6%9A%E0%B7%8F%E0%B6%BB%E0%B7%8A%E0%B6%BA%E0%B7%8F%E0%B6%BD%E0%B6%BA/@6.9034381,79.9519951,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae2572d98e15c63:0xf7bc4d1d30bee97e!8m2!3d6.9034381!4d79.9541838 key=AIzaSyA-9VvcJNIAGT30WWkoU0JuPPqqbPo9H4k" allowfullscreen>" style="border:0"></iframe>
	</div>
	<div class="contact">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header1">Contact <span>Info</span></h3>
			<div class="w3layouts_mail_grid">
				<div class="agileits_mail_grid_right agileits_w3layouts_mail_grid_right">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
						<form action="#" method="post">
							<span>
								<i>Name</i>
								<input type="text" name="Name" placeholder=" " required="">
							</span>
							<span>
								<i>Email</i>
								<input type="email" name="Email" placeholder=" " required="">
							</span>
							<span>
								<i>Subject</i>
								<input type="text" name="Subject" placeholder=" " required="">
							</span>
							<span>
								<i>Message</i>
								<textarea name="Message" placeholder=" " required=""></textarea>

							</span>
							<input type="submit" value="SUBMIT">
						</form>
					</div>
				</div>
				<div class="col-md-6 agileits_mail_grid_left agileinfo_mail_grid_left">
					<div class="agileits_mail_grid_lft_grid wthree_mail_grid_lft_grid">
						<h4>Integer venenatis massa lobortis porta</h4>
						<ul>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Nulla nec facilisis turpis ac</li>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Eget ornare ex nisl nec lacus</li>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Ut tortor augue, placerat massa</li>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Quisque consectetur sagittis</li>
							<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Curabitur mollis dignissim erat</li>
						</ul>
					</div>
					
				</div>
				<div class="col-md-6 agileits_mail_grid_lft_grid1 w3_agileits_mail_grid_lft_grid1">
							
									<h4><span>Twitter</span> Posts</h4>
									<ul>
										<li><a href="mailto:info@example.com">@Mark Lii</a> consequat dui id turpis
											<a href="#">http://example.com</a> auctor tellus eu nisi vehicula consequat.</li>
										<li><a href="mailto:info@example.com">@Henry Paul</a> sit amet dolor
											<a href="#">http://example1.com</a> porttitor suscipit orci semper, bibendum.</li>
										<li><a href="mailto:info@example.com">@John Carl</a> augue diam consequat mi
											<a href="#">http://example2.com</a> facilisis vitae, euismod vitae orci consequat.</li>
									</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
@endsection