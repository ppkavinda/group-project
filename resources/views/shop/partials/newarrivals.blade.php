<!-- /new_arrivals --> 
	<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <h3 class="wthree_text_info">New <span>Arrivals</span></h3>		
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li> Clothes</li>
					<li> Masks</li>
					<li> Shoes and Slippers</li>
					<li> Spices</li>
				</ul>
				<div class="resp-tabs-container">
					<!--/tab_one-->
					<div class="tab1">
						<div class="row">
							@include('shop.partials.latestClothesProductBox')
							<div class="clearfix"></div>
						</div>
					</div>
					<!--//tab_one-->
					<!--/tab_two-->
					<div class="tab2">
						<div class="row">
							@include('shop.partials.latestMasksProductBox')
							<div class="clearfix"></div>
						</div>
					</div>
					<!--//tab_two-->
					<div class="tab3">
						<div class="row">
							@include('shop.partials.latestShoesProductBox')
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="tab4">
						<div class="row">
							@include('shop.partials.latestSpicesProductBox')
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
	{{-- </div> --}}
	<!-- //new_arrivals --> 