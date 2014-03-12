<?php namespace Tangfastics\Controllers;

use Illuminate\Support\Facades\Auth;
use Tangfastics\Repositories\ArticleRepositoryInterface;
use Tangfastics\Repositories\UserRepositoryInterface;

/**
 * Profile Controller Class
 *
 * @package Tangfastics
 * @author
 **/
class ProfileController extends BaseController
{
	/**
	 * Article Repository
	 *
	 * @var \Tangfastics\Repositories\ArticleRepositoryInterface
	 **/
	protected $articles;

	/**
	 * User Repository
	 *
	 * @var \Tangfastics\Repositories\UserRepositoryInterface
	 **/
	protected $users;

	/**
	 * Current auth user
	 *
	 * @var \Tangfastics\Models\User
	 **/
	protected $user;

	/**
	 * Create a new instance of UserController.
	 *
	 * @param \Tangfastics\Repositories\UserRepositoryInterface
	 * @param \Tangfastics\Repositories\ArticleRepositoryInterface
	 **/
	public function __construct(UserRepositoryInterface $users, ArticleRepositoryInterface $articles)
	{
		$this->articles = $articles;
		$this->users = $users;
		$this->user = Auth::user();
	}

	public function getProfile($username)
	{
        $user = $this->users->findByUsername($username);

		$this->view('profiles.index', compact('user'));
	}
} // END class ProfileController
