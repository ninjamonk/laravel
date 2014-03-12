<?php namespace Tangfastics\Repositories\Eloquent;

use Tangfastics\Models\User;
use Tangfastics\Repositories\UserRepositoryInterface;

class UserRepository extends AbstractRepository implements UserRepositoryInterface {

	/**
	 * Create a new instance of UserRepository
	 *
	 * @return void
	 * @param \Tangfastics\Models\User $user
	 **/
	public function __construct(User $user)
	{
		$this->model = $user;
	}

	/**
	 * Find all articles paginated.
	 * @param  int $perPage Number of articles perPage.
	 * @return Illuminate\Database\Eloquent\Collection|\Tangfastics\Models\User[]
	 */
	public function findAllPaginated($perPage=10)
	{
		return $this->model->orderBy('created_at', 'DESC')->paginate($perPage);
	}

	/**
	* Find a user by username.
	* @param string $username Username slug.
	* @return Illuminate\Database\Eloquent\Collection|Tangfastics\Models\User[]
	*/
	public function findByUsername($username)
	{
		return $this->model->whereUsername($username)->first();
	}
}
