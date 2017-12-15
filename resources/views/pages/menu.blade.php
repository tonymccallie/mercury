<ul class="nav navbar-nav">
@foreach($pages as $page)
	@if(!count($page->descendants))
		<li><a href="{{ url('/'.$page->slug) }}">{{ $page->title }}</a></li>	
	@else
		@include('pages.dropdown')
	@endif
@endforeach
</ul>