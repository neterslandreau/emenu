Vue.component('menu-item', {

	props: ['name', 'price', 'description'],

	template: `

	<a href="#">

		<div class="card text-white bg-dark mb-3">

			<div class="card-body">

				<div class="row">

					<div class="col-sm-9">

						<span style="font-size: .70rem; font-weight: bold;">{{ name }}</span>

					</div>

					<div class="col-sm-3 text-right">

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
    el: '#app',
});
