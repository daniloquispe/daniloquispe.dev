<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @property string $name
 * @property string $slug
 * @property string[] $technologies
 */
class PortfolioItem extends Model
{
    use HasFactory;

	protected $table = 'portfolio';

	protected $fillable = [
		'image',
		'name',
		'short_description',
	];

	protected $casts = ['technologies' => 'array'];

	protected static function boot()
	{
		parent::boot();

		static::creating(function ($model)
		{
			$model->slug = Str::slug($model->name);
		});
	}

	/**
	 * @link https://twitter.com/mattkingshott/status/1767913513777873032
	 */
	public function getRouteKey()
	{
		return $this->slug;
	}

	public function resolveRouteBinding($value, $field = null)
	{
		return parent::resolveRouteBinding($value, 'slug');
	}
}
