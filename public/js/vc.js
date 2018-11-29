Vue.component('menu-item', {

	props: ['name', 'price', 'description'],

	template: `

	<a href="#">

		<div class="card text-dark bg-light mb-3">

			<div class="card-body">

				<div class="row" style="border: 1px #fff;">

					<div class="col-sm-8">

						<span style="font-size: .8rem; font-weight: bold;">{{ name }}</span>

					</div>

					<div class="col-sm-4 text-right" style="font-size: .7rem;font-weight: bold;">

						<span>{{ price }}</span>

					</div>

				</div>

				<div class="card-text text-center">

					{{ description }}

				</div>

			</div>

		</div>

	</a>

	`,

	mounted: function mounted() {
		console.log('Menu item component loaded.')
	}   
});

app = new Vue({
    el: '#menuItems',
});
