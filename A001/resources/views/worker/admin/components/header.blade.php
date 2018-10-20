<div class="container-fluid">
	<div class="row no-gutter">
		<div class="col-md-2 brand-block">
			<img src="{{ asset('img/worker/admin.png') }}">
			<span>admin</span>
		</div>
		<div class="col-md-8 center-block">
			
		</div>
		<div class="col-md-2 logout-block">
			<a class="link" href="{{ route('logout') }}" 
				onclick="event.preventDefault();
				document.getElementById('logout-form').submit();
			">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
		</div>
	</div>
</div>