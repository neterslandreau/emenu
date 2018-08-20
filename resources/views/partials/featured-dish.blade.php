<div class="col-xs-8 col-lg-4 col-md-4 text-center">

	<h2>{{ $item->name }}</h2>

	@if (Storage::disk('local')->exists('public/items/' . $item->slug . '.png'))

		<img class="img-rounded" src="/storage/items/{{ $item->slug }}.png" height="100">

    @endif

    <p>
		{{ $item->description }}
	</p>

	<p>
		<a class="btn btn-default" role="button" data-toggle="modal" data-target="#{{ $item->slug }}">Order now for just ${{ $item->price }} &raquo;</a>
	</p>

</div>
@include('partials.modal')