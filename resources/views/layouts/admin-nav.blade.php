<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{url('admin')}}"><img src="{{asset('assets/logo2.png')}}" alt=""></a>
		</div>
		<div>
			<ul class="nav navbar-nav navbar-right">
				@if(Auth::user())
                    <li>
                        <span>{{ Auth::user()->name }}</span>
                    </li>
                @endif
			</ul>
		</div>
	</div>
</nav>

