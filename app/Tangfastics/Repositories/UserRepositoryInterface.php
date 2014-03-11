<?php namespace Tangfastics\Repositories;

use Tangfastics\Models\User;

interface UserRepositoryInterface {

	public function findAllPaginated($perPage=10);
}