<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateElement extends Model
{
    public function template() {
		return $this->belongsTo(Template::class);
	}

}
