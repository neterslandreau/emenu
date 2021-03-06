	@if(
	in_array($item->slug, [
		'daily-special-7-days-a-week-until-2-00-pm',
		'bagel',
		'bagel-w-cream-cheese',
		'2-2-2',
		'4-x-2',
		'western',
	])
	||
	in_array($item->type->slug, [
		'breakfast',
		'smoothies',
		'chicken-wings',
	])
	)

	<label>Select your choices:</label>

	@endif

	@if ($item->slug == 'daily-special-7-days-a-week-until-2-00-pm' || $item->slug == '2-2-2' || $item->slug == '4-x-2' || $item->type->slug == 'breakfast')
	{{-- Breakfast Egg Platters --}}

		@if ($item->slug == 'w-bacon-sausage-links-or-ham')

			<div class="form-group">

				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_bacon" name="meats" value="bacon">Bacon</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_sausage" name="meats" value="suasage">Sausage Links</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_ham" name="meats" value="ham">Ham</label>

			</div>

		@elseif ($item->slug == '2-2-2')

			<div class="form-group">

				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_bacon" name="meats" value="bacon">Bacon</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_sausage" name="meats" value="suasage">Sausage Links</label>

			</div>

		@endif

			<div class="form-group">

				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_hashbrowns" name="sides" value="hashbrown"> Hash Browns</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_tomatoes" name="sides" value="homefries"> Home Fries</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_pickles" name="sides" value="grits"> Grits</label>

			</div>

			<div class="form-group">

				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_toast" name="bread" value="toast"> Toast</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_biscuit" name="bread" value="biscuit"> Biscuit</label>

			</div>

	@elseif ($item->slug == 'bagel-w-cream-cheese' || $item->slug == 'bagel')

		<div class="form-group">

			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_plain" name="bread" value="plain">Plain</label>
			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_everything" name="bread" value="everything">Everything</label>
			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_garlic" name="bread" value="garlic">Garlic</label>
			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_cinnamonraison" name="bread" value="cinnamonraison">Cinnamon Raison</label>

		</div>

	@elseif ($item->type->slug == 'smoothies') {{-- Breakfast Omlettes --}}

			<div class="form-group"><span style="padding:right: 5px;"><b>Sides:</b></span>

				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_hashbrowns" name="sides" value="hashbrown">Hash Browns</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_pickles" name="sides" value="grits">Grits</label>

			</div>

			<div class="form-group"><span style="padding:right: 5px;"><b>Bread:</b></span>

				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_toast" name="bread" value="toast">Toast</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_biscuit" name="bread" value="biscuit">Biscuit</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_english-muffin" name="bread" value="english-muffin">English Muffin</label>

			</div>

			@if ($item->slug == 'ham-bacon-or-sausage-cheese')

			<div class="form-group"><span style="padding:right: 5px;"><b>Bread:</b></span>

				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_bacon" name="meats" value="bacon">Bacon</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_sausage" name="meats" value="suasage">Sausage Links</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_ham" name="meats" value="ham">Ham</label>

			</div>


			@endif

			@elseif ($item->slug === 'western')

			<div class="form-group"><span style="padding:right: 5px;"><b>Extras:</b></span>

				<label class="checkbox-inline"><input type="checkbox" id="{{ $item->slug }}_extra_bagel" name="meats" value="bagel">Bagel</label>
				<label class="checkbox-inline"><input type="checkbox" id="{{ $item->slug }}_extra_cheese" name="meats" value="cheese">Cheese</label>

			</div>

	@endif

	@if ($item->type->slug === 'chicken-wings')

		<div class="form-group" style="padding-left: 10px;">

			@php

				$cwtypes = [
					'mild',
					'medium',
					'hot',
					'bbq',
					'teriyaki',
					'mango habanero',
					'garlic',
					'garlic parmesan',
				];

			@endphp

			@foreach ($cwtypes as $cw => $typ)

			@if (!($cw % 4 ))

			<div class="row">

			@endif

			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_{{ $typ }}" name="{{ $item->type->slug }}" value="{{ $typ }}">{{ ucfirst($typ) }}</label>

			@if ($cw % 4 == 3)

			</div>

			@endif

			@endforeach



		</div>

	@endif

