<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageElement extends Model
{
	protected $orderBy = 'order';
	protected $orderDirection = 'ASC';

    public function page() {
		return $this->belongsTo(Page::class)->ordered();
	}
}
