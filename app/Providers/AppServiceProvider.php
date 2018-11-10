<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		Blade::withoutDoubleEncoding();
		
		view()->composer('home', function($view) {
			$items = \App\Item::get()->sortBy('order');
			$types = \App\Type::get()->sortBy('order');
			$view->with(compact('items', 'types'));
		});

		view()->composer('diner', function($view) {
			$featuredItems = \App\Item::featuredItems();
			$types = \App\Type::get()->sortBy('order');

			$menuItems = [];
			foreach ($types as $t => $type) {
				$menuItems[$t] = \App\Item::getItems($type->slug)->sortBy('order');
				$menuItems[$t]->typeName = $type->name;

			}

			$view->with(compact('featuredItems', 'menuItems', 'types'));
		});

	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
}
