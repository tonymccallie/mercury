<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    public function pages() {
		return $this->hasMany(Page::class);
	}

	public function elements() {
		return $this->hasMany(TemplateElement::class);
	}
}
