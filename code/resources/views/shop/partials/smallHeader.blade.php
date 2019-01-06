<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>{{ explode(' ', $path)[0] }} <span> {{ (count(explode(' ', $path)) >= 2 ) ? explode(' ', $path)[1] : '' }}  </span></h3>
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">
                <ul class="w3_short">
                    <li><a href="index.html">Home</a><i>|</i></li>
                    <li>{{ $path }}</li>
                </ul>
            </div>
        </div>
	</div>
</div>