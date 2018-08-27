@extends('layouts.diner-layout')

@section('content')
<div id="diner">
	<div class="row row-offcanvas row-offcanvas-right">

		<div class="col-xs-12 col-sm-9">

			<p class="pull-right visible-xs">

			<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle Menu</button>

			</p>

			<button id="jumbotron-toggle" type="button" class="btn btn-primary btn-xs">Toggle Jumbotron</button>

			@include('partials.jumbotron')

			<div class="row">

				@foreach ($featuredItems as $item)
				@include('partials.featured-dish')
				@endforeach

			</div>

		</div>

	<div class="col-xs-8 col-sm-3 sidebar-offcanvas" id="sidebar">

		@include('partials.sidebar')

	</div>

	</div>

<hr>

</div>

@endsection