<ul>
@foreach($pages as $page)
	@if(!count($page->descendants))
		<li><a href="{{ url('/'.$page->slug) }}">{{ $page->title }}</a></li>	
	@else
		@include('pages.sidemenu', ['pages' => $page->descendants ])
	@endif
@endforeach
</ul>