<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateElement extends Model
{
	protected $orderBy = 'order';
	protected $orderDirection = 'ASC';
	
	public function template() {
		return $this->belongsTo(Template::class)->ordered();
	}

}
