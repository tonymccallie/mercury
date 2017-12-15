<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function page($slug = 'home') {
		$page = Page::where('slug',$slug)->firstOrFail();
		return view('page', compact('page'));
	}

	public function get($id = null) {
		$page = Page::with('template')->with('elements')->findOrFail($id);
		return $page;
	}

	public function pagetree() {
		return Page::defaultOrder()->get()->toTree();
	}

	public function create(Request $request) {
		$page = new Page();
		$page->title = $request->title;
		$page->parent_id = $request->parent_id;
		$page->template_id = $request->template_id;
		$page->hidden = $request->hidden;
		$slug = str_slug($request->title);
		$allSlugs = $this->getRelatedSlugs($slug);
		if (! $allSlugs->contains('slug', $slug)){
			$page->slug = $slug;
        } else {
			for ($i = 1; $i <= 100; $i++) {
				$newSlug = $slug.'-'.$i;
				if (! $allSlugs->contains('slug', $newSlug)) {
					$page->slug = $newSlug;
					break;
				}
			}
		}
		$page->save();
		return $page;
	}

	public function createmultiple(Request $request) {
		$pages = explode("\n",$request->title);
		
		foreach($pages as $newpage) {
			$page = new Page();
			$page->title = $newpage;
			$page->parent_id = $request->parent_id;
			$page->template_id = $request->template_id;
			$page->hidden = $request->hidden;
			$slug = str_slug($newpage);
			$allSlugs = $this->getRelatedSlugs($slug);
			if (! $allSlugs->contains('slug', $slug)){
				$page->slug = $slug;
			} else {
				for ($i = 1; $i <= 100; $i++) {
					$newSlug = $slug.'-'.$i;
					if (! $allSlugs->contains('slug', $newSlug)) {
						$page->slug = $newSlug;
						break;
					}
				}
			}
			$page->save();
		}
		
		return $page;
	}

	public function pagemove(Request $request) {
		$page = Page::find($request['page']);
		
		$page->parent_id = $request['parent'];
		$page->save();

		if(!empty($request['neighbor'])) {
			$neighbor = Page::find($request['neighbor']);
			$page->afterNode($neighbor)->save();
		}

		return Page::defaultOrder()->get()->toTree();
	}

	public static function menu($config = "{}") {
		$tmpConfig = json_decode($config,true);
		$config = array_merge(array(
			'view' => 'pages.menu'
		),(array)$tmpConfig);
		$pages = Page::all()->toTree();
		return view($config['view'], compact('pages'));
	}

	protected function getRelatedSlugs($slug, $id = 0) {
		return Page::where('slug','like',$slug.'%')->select('slug')->get();
	}
}
