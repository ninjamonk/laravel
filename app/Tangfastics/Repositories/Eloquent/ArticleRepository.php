<?php namespace Tangfastics\Repositories\Eloquent;

use Tangfastics\Models\User;
use Tangfastics\Models\Article;
use Tangfastics\Repositories\ArticleRepositoryInterface;

class ArticleRepository extends AbstractRepository implements ArticleRepositoryInterface {

	public function __construct(Article $article)
	{
		$this->model = $article;
	}

	public function findAllPaginated($perPage=10)
	{
		return $this->model->orderBy('created_at', 'DESC')->paginate($perPage);
	}
}