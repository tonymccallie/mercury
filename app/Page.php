<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

class Page extends Model
{
	use NodeTrait;
	use SoftDeletes;
	
	// public function getRouteKeyName() {
	// 	return 'slug';
	// }
	protected $dates = ['deleted_at'];

    public function template() {
		return $this->belongsTo(Template::class);
	}

	public function elements() {
		return $this->hasMany(PageElement::class)->orderBy('location');
	}
}
