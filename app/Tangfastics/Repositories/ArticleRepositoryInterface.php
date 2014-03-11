<?php namespace Tangfastics\Repositories;

use Tangfastics\Models\User;
use Tangfastics\Models\Article;

interface ArticleRepositoryInterface {
	/**
	 * Find all articles paginated.
	 * @param  integer $perPage
	 * @return \Illuminate\Pagination\Paginator|\Tangfastics\Models\Article[]
	 */
	public function findAllPaginated($perPage=10);
}