@php

$img = Image::canvas(800, 600, '#ff0000');

$image->response();

@endphp

<div id="jumbotron" class="jumbotron" style="background-color: inherit; margin: 0; padding: 20px 0px 8px 0px; border: 0px solid #000;">

	<div class="row">
	@if (!$agent->isMobile())

		<div class="col-md-5">

	@else

		<div class="col-md-3">

	@endif

		<img class="img-rounded block-center" src="/img/emenu.png" style="width:100%;">

	</div>

	@if (!$agent->isMobile())

		<div class="col-md-7">

		<!-- @include('partials.info.contact') -->

	@else

		<div class="col-md-9">

	@endif

		<div id="map_canvas" style="width: 100%; height: 300px;"></div>

	</div>

	</div>

	<hr style="border: 1px solid #e0e0e0;">

</div>
