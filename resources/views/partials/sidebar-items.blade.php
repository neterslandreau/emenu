<div class="list-group">

	@foreach ($menuItem as $mi => $item)

	<menu-item name="{{ $item->name }}" price="{{ $item->price }}" description="" data-toggle="modal" data-target="#{{ $item->slug }}"></menu-item>

    @include('partials.modal')

	@endforeach

</div>
