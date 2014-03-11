<?php

namespace Tangfastics\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'articles';

	/**
	 * The class used to present the model.
	 *
	 * @var string
	 */
	public $presenter = 'Tangfastics\Presenters\ArticlePresenter';

	/**
	 * The relations to eager load on every query.
	 *
	 * @var array
	 */
	protected $with = ['user'];

	/**
	 * Query the tricks' votes.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function votes()
	{
		return $this->belongsToMany('Tangfastics\Models\User', 'votes');
	}

	/**
	 * Query the user that posted the trick.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
    {
        return $this->belongsTo('Tangfastics\Models\User');
    }
}