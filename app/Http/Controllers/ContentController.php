<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContentController extends Controller
{
    public static function text($config = "{}") {
		$tmpConfig = json_decode($config,true);
		$config = array_merge(array(
			'view' => 'content.text'
		),(array)$tmpConfig);
		$content = Content::findOrFail($config['id']);
		return view($config['view'], compact('content'));
	}
}
