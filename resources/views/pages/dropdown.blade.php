<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		{{ $page->title }}
		<span class="caret"></span>
	</a>
	<ul class="dropdown-menu">
		@foreach($page->descendants as $child)
			<li>
				<a href="{{ $child->slug }}">{{ $child->title }}</a>
			</li>
		@endforeach
	</ul>
</li>