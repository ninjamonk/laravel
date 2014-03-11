<?php namespace Tangfastics\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind(
			'Tangfastics\Repositories\ArticleRepositoryInterface',
			'Tangfastics\Repositories\Eloquent\ArticleRepository'
		);

		$this->app->bind(
			'Tangfastics\Repositories\UserRepositoryInterface',
			'Tangfastics\Repositories\Eloquent\UserRepository'
		);

		$this->app->bind(
			'Tangfastics\Repositories\ProfileRepositoryInterface',
			'Tangfastics\Repositories\Eloquent\ProfileRepository'
		);
	}

}