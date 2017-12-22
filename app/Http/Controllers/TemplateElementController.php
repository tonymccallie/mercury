<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TemplateElement;

class TemplateElementController extends Controller
{
    public function place(Request $request, $id) {
		$element = TemplateElement::findOrFail($id);
		$element->location = $request->column['slug'];
		$element->order = $request->index;
		$element->save();

		$this->_reorder($request->column['slug'],$id,$request->index);

		return $element;
	}

	public function create(Request $request) {
		//return $request->all();
		$element = new TemplateElement();
		$element->template_id = $request->template_id;
		$element->location = $request->location;
		$element->controller = $request->controller;
		$element->action = $request->action;
		$element->save();

		$this->_reorder($request->location,null,999);
		return $element;
	}

	private function _reorder($location, $id, $order) {
		$elements = TemplateElement::where([
			['location',$location],
			['id','<>',$id]
		])->get();

		$index = 0;
		foreach($elements as $elementOrder) {
			if($index == $order) {
				$index++;
			}
			$elementOrder->order = $index;
			$elementOrder->save();
			$index++;
		}
	}
}
