<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Page extends Model
{
	use NodeTrait;
	
	// public function getRouteKeyName() {
	// 	return 'slug';
	// }
	
    public function template() {
		return $this->belongsTo(Template::class);
	}

	public function elements() {
		return $this->hasMany(PageElement::class)->orderBy('location');
	}
}
