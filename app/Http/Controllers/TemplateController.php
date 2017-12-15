<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template;

class TemplateController extends Controller
{
    public function list() {
		return Template::all();
	}

	public function get($id = null) {
		$template = Template::with('elements')->findOrFail($id);
		return $template;
	}
}
