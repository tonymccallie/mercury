@include('partial.head') 
@include('partial.menu') 
<div class="container">

	<!-- Main component for a primary marketing message or call to action -->
	<div class="jumbotron">
		<h1>@yield('title')</h1>
		@yield('content')
	</div>

</div>
@include('partial.foot')