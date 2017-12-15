@include('partial.head') 
@include('partial.menu') 
<div class="container">

	<div class="row">
		<div class="col-sm-8">
			<div class="well">
				<h1>@yield('title')</h1>
				@yield('content')
			</div>
		</div>
		<div class="col-sm-4">
			@yield('sidebar')
		</div>
	</div>

</div>
@include('partial.foot')