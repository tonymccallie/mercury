<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageElement extends Model
{
    public function page() {
		return $this->belongsTo(Page::class);
	}
}
