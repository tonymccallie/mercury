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
		$template = Template::with(array('elements' => function($query) {
			$query->orderBy('location','ASC')->orderBy('order','ASC');
		}))->findOrFail($id);
		return $template;
	}

	public function set(Request $request, $id) {
		// dd($request);
		//return $request->all();
		$template = Template::findOrFail($id);
		$template->title = $request->title;
		$template->file = $request->file;
		$template->json = $request->json;
		$template->update();
		return $template;
	}
}
