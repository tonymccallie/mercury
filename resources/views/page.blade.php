@extends('template.'.$page->template->file)

@section('title',$page->title)

<?php
	$locations = array();

	foreach($page->template->elements as $element) {
		if(!isset($locations[$element->location])) {
			$locations[$element->location] = array();
		}
		array_push($locations[$element->location], $element);
	}

	foreach($page->elements as $element) {
		if(!isset($locations[$element->location])) {
			$locations[$element->location] = array();
		}
		array_push($locations[$element->location], $element);
	}
?>

@foreach($locations as $key=>$location)
	@section($key)
		@foreach($location as $element)
			<?php
				if(!empty($element->controller)) {
					$className = "\\App\\Http\\Controllers\\".$element->controller;
					$tmpClass = new $className;
					$actionName = $element->action;
					echo $tmpClass::$actionName($element->config);
					//eval('echo \\App\\Http\\Controllers\\'.$element->controller.'::'.$element->action.'();');
				}
			?>
		@endforeach
		<?php //echo PageController::menu(); ?>
	@endsection
@endforeach